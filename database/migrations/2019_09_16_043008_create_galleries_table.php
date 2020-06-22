<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('last_step');
            $table->string('model_gender');
            $table->integer('model_age_max');
            $table->integer('model_age_min');
            $table->integer('model_height_max');
            $table->integer('model_height_min');
            $table->string('model_ethnicity');
            $table->string('model_body_shape');
            $table->tinyInteger('model_plus_size');
            $table->string('model_eye_color');
            $table->string('model_hair_color');
            $table->string('photo_bkg_color');
            $table->string('photo_dimension');
            $table->string('photo_format');
            $table->integer('photo_number_shoot');
//            $table->timestamp('date_started_generating');
//            $table->timestamp('date_ended_generating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
