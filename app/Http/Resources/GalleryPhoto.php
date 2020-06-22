<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryPhoto extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'gallery_id' => $this->gallery_id,
            'photo_id'   => $this->id,
            'input'      => env('BASE_URL').'/uploaded-photo/'.$this->url,
            'output'     => [],
        ];
    }
}
