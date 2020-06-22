<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = [
        'user_id', 'last_step', 'model_gender', 'model_age_max', 'model_age_min', 'model_height_max', 'model_height_min', 'model_ethnicity', 'model_body_shape', 'model_plus_size', 'model_eye_color', 'model_hair_color', 'photo_bkg_color', 'photo_dimension', 'photo_format', 'photo_number_shoot'
    ];
}
