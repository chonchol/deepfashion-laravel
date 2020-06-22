<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PhotoController extends Controller
{

//    public function __invoke(Request $request)
//    {
//        //
//    }
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        return view('app.result');
    }


    public function create()
    {
        return view('app.upload');
    }

    public function generating()
    {
        return view('app.generating');
    }

    public function setting(Request $request, $id)
    {
        $data = $request->session()->get('galleryId');
        //dd($data);
        $gallery = Gallery::find($data);

        $photos = DB::table('gallery_photos')
            ->where('gallery_id', '=', $data)
            ->get();
        //dd($photos);
        //return $photos;
        return view('app.setting', ['photos' => $photos, 'gallery' => $gallery]);
    }

    public function saveSetting(Request $request, $id)
    {

        $photoData = Photo::where('gallery_id', '=', $id)->get();
        //dd(count($photoData));

        if (count($photoData) >= 1) {
            $galleryData = Gallery::find($id);

            $galleryData->last_step          = 2;
            $galleryData->model_gender       = "Unisex";
            $galleryData->model_age_max      = 60;
            $galleryData->model_age_min      = 16;
            $galleryData->model_height_max   = 6.11;
            $galleryData->model_height_min   = 5.00;
            $galleryData->model_ethnicity    = "Random";
            $galleryData->model_body_shape   = "Random";
            $galleryData->model_plus_size    = 0;
            $galleryData->model_eye_color    = "Random";
            $galleryData->model_hair_color   = "Random";
            $galleryData->photo_bkg_color    = $request->input('photo_bkg_color');
            $galleryData->photo_dimension    = $request->input('photo_dimension');
            $galleryData->photo_format       = $request->input('photo_format');
            $galleryData->photo_number_shoot = $request->input('photo_number_shoot');
            //$galleryData->created_at         = \Carbon\Carbon::now();
            $galleryData->updated_at         = \Carbon\Carbon::now();

            $galleryData->save();

            return redirect(route('generatingPhoto'));
        } else {
            return abort_if(!count($photoData) == 1, 403);
        }

    }

    function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }


    public function store(Request $request)
    {

//        $request->validate([
//            'url' => 'required|image|mimes:jpeg,png,jpg|max:5120'
//        ]);

//        $path = storage_path('app/public/uploaded_photos');
//
//        if (!file_exists($path)) {
//            mkdir($path, 0777, true);
//        }
        $encryptText = $this->generateRandomString(16);

        $galleryId = DB::table('galleries')->insertGetId([
                'user_id' => Auth::check() ? Auth::id() : null,
                'last_step' => 1,
                'model_gender' => null,
                'model_age_max' => null,
                'model_age_min' => null,
                'model_height_max' => null,
                'model_height_min' => null,
                'model_ethnicity' => null,
                'model_body_shape' => null,
                'model_plus_size' => null,
                'model_eye_color' => null,
                'model_hair_color' => null,
                'photo_bkg_color' => null,
                'photo_dimension' => null,
                'photo_format' => null,
                'photo_number_shoot' => null,
                'created_at'         => \Carbon\Carbon::now(),
                'updated_at'         => \Carbon\Carbon::now(),
            ]
        );

        $photos = $request->file('url');

        $count = 1;
        foreach ($photos as $photo) {
            $photoUpload          = new Photo();
            $photoUpload->user_id = Auth::check() ? Auth::id() : null;
            //$photoUpload->user_id    = Auth::id();
            $photoUpload->gallery_id = $galleryId;
            $photoUpload->index      = $count;

            if ($request->hasFile('url')) {

                $photoName = $photo->getClientOriginalName();
                $photo->move(public_path('uploaded-photo'), $photoName);
                $photoUpload->url = $photoName;

            } else {
                echo "Please Add Your Valid Image!";
            }

            $photoUpload->save();
            $count++;
        }

        $request->session()->put('galleryId', $galleryId);

        return $encryptText;
        //return redirect(route('settingPhoto'));
        //return response()->json(['success' => 200]);
    }

    public function destroy($id)
    {

        $photo = Photo::find($id);

        $photoCount = Photo::where('gallery_id', $photo->gallery_id)->count();
        if ($photoCount <= 1) {
            //return $photoCount;
            //return response()->json(['error' => 422]);
            throw ValidationException::withMessages(["photo_id" => "Minimum one photo required"]);
        } else {
        $path            = public_path('uploaded-photo');
        $destinationPath = $path . '/' . $photo->url;

        if (file_exists($destinationPath)) {
            unlink($destinationPath);
            $photo->delete();
        } else {
            echo "FILE NOT FOUND!";
        }
        //dd($data);
        return response()->json(['success' => 200]);
         }

    }
}
