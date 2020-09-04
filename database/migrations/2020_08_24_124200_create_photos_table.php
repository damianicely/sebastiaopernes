<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('reference');
            $table->enum('collection', ['costa vicentina','cape st vincent','storm waves','shorelines','skylines','islands']);
            $table->string('description');
            $table->string('file_name');
            $table->string('file_path');
            $table->unsignedSmallInteger('height')->nullable();
            $table->unsignedSmallInteger('x-height')->nullable();
            $table->unsignedSmallInteger('l-height')->nullable();
            $table->unsignedSmallInteger('m-height')->nullable();
            $table->unsignedSmallInteger('s-height')->nullable();
            $table->unsignedSmallInteger('t-height')->nullable();
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
        Schema::dropIfExists('photos');
    }
}
