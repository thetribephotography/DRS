<?php

use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $collection) {
            // $collection->id()->unique();

            //Required for all
            $collection->index('title');
            $collection->string('description');
            $collection->array('authors');
            $collection->string('type'); // "publication", "dataset","software","workflow"
            $collection->index('user_id');
            $collection->unsignedBigInteger('user_id');
            $collection->string('path');
            $collection->string('thumbnail_path')->nullable();
            $collection->string('access_rights'); // "public", "private", "group"
            $collection->array('category'); // Has a category
            $collection->array('comments')->nullable(); //Upload can have a commment
            $collection->array('tags')->nullable();
            $collection->string('file_type'); //Type of file, zip, jpeg, png, exe
            $collection->bigInteger('file_size'); //Size of File
            $collection->softDeletes();

            //For file size - To be done
            // $collection->unsignedBigInteger()->nullable();
            $collection->timestamps();


            //Special Attributes for Publication
            $collection->string('published_at')->nullable();
            $collection->string('doi')->nullable();

            //Special Attributes for Software
            $collection->array('languages')->nullable();

            //Special Attributes for Dataset

            //Special Attributes for Dataset




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
};
