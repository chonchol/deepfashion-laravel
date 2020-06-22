<?php

namespace App\Http\Resources;

use App\Http\Resources\Photo as PhotoResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class Gallery extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        $photos =  DB::table('gallery_photos')
            //->select('id as photo_id', 'url as input')
            ->where('gallery_id', $this->id)
            ->get();
        //dd($photos);
        return [
            'gallery_id' => $this->id,
            'created_date' => $this->created_at->format('Y-m-d H:i:s'),
            'modified_date' => $this->updated_at->format('Y-m-d H:i:s'),
//            'user' => [
//                'id' => null,
//                'name' => null,
//                'plan' => 'FREE',
//            ],
            'user' => null,
            'last_step' => $this->last_step,
            'settings' => [
                'model' => [
                    'gender' => $this->model_gender,
                    'age_range' => [
                        'min' => $this->model_age_min,
                        'max' => $this->model_age_max,
                    ],
                    'height_range' => [
                        'scale' => null,
                        'min' => $this->model_height_min,
                        'max' => $this->model_height_max,
                    ],
                    'ethnicity' => $this->model_ethnicity,
                    'body_shape' => $this->model_body_shape,
                    'plus_size' => $this->model_plus_size == 0 ? false : true,
                    'eye_color' => $this->model_eye_color,
                    'hair_color' => $this->model_hair_color,
                ],
                'photo' => [
                    'background_color' => $this->photo_bkg_color,
                    'dimension' => $this->photo_dimension,
                    'format' => $this->photo_format,
                    'number_of_images_per_image' => $this->photo_number_shoot,
                ]
            ],
                'photos' =>  PhotoResource::collection($photos),

        ];

    }
}
