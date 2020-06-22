<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Photo;
use App\Gallery;
use App\Http\Resources\Photo as PhotoResource;
use App\Http\Resources\GalleryPhoto as GalleryPhotoResource;
use App\Http\Resources\Gallery as GalleryResource;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getPhoto()
    {
        //
        $photos = Photo::all();
//        $photos = DB::table('gallery_photos')
//            ->join('generated_photos', 'gallery_photos.id', '=', 'generated_photos.photo_id')
//            ->select('gallery_photos.*', 'generated_photos.url as output')
//            ->get();
        //dd($photos);
        // Return collection of articles as a resource
        return GalleryPhotoResource::collection($photos);

    }

    public function singlePhoto($id)
    {
        // Get photo
        $photo = Photo::findOrFail($id);
        // Return single article as a resource
        return new GalleryPhotoResource($photo);
    }

    public function storePhoto(Request $request)
    {
        $photo             = $request->isMethod('put') ? Photo::findOrFail($request->photo_id) : new Photo;
        $photo->id         = $request->input('photo_id');
        $photo->user_id    = $request->input('user_id');
        $photo->gallery_id = $request->input('gallery_id');
        $photo->index      = $request->input('index');
        $photo->url        = $request->input('url');

        if ($photo->save()) {
            return new GalleryPhotoResource($photo);
        }
    }

    public function getGallery()
    {
        $galleries = Gallery::all();
        //$galleries = DB::table('galleries')
            //->join('gallery_photos', 'galleries.id', '=', 'gallery_photos.gallery_id')
            //->join('users', 'galleries.user_id', '=', 'users.id')
            //->select('galleries.*', 'users.name')
          //  ->get();
        //dd($galleries);
        return GalleryResource::collection($galleries);
    }


    public function singleGallery($id)
    {
        // Get photo
        $gallery = Gallery::findOrFail($id);
        // Return single article as a resource
        return new GalleryResource($gallery);
    }

    public function storeGallery(Request $request)
    {
        $gallery                     = $request->isMethod('put') ? Gallery::findOrFail($request->gallery_id) : new Gallery;
        $gallery->id                 = $request->input('gallery_id');
        $gallery->user_id            = $request->input('user_id');
        $gallery->last_step          = $request->input('last_step');
        $gallery->model_gender       = $request->input('model_gender');
        $gallery->model_age_max      = $request->input('model_age_max');
        $gallery->model_age_min      = $request->input('model_age_min');
        $gallery->model_height_max   = $request->input('model_height_max');
        $gallery->model_height_min   = $request->input('model_height_min');
        $gallery->model_ethnicity    = $request->input('model_ethnicity');
        $gallery->model_body_shape   = $request->input('model_body_shape');
        $gallery->model_plus_size    = $request->input('model_plus_size');
        $gallery->model_eye_color    = $request->input('model_eye_color');
        $gallery->model_hair_color   = $request->input('model_hair_color');
        $gallery->photo_bkg_color    = $request->input('photo_bkg_color');
        $gallery->photo_dimension    = $request->input('photo_dimension');
        $gallery->photo_format       = $request->input('photo_format');
        $gallery->photo_number_shoot = $request->input('photo_number_shoot');
        if ($gallery->save()) {
            return new GalleryResource($gallery);
        }
    }

}
