<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'gallery_photos';
    protected $fillable = [
        'user_id', 'gallery_id', 'index','url'
    ];
}
