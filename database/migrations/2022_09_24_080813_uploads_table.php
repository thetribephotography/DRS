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
            $collection->string('title');
            $collection->string('description');
            $collection->string('published_at');
            $collection->array('language');
            $collection->string('author');
            $collection->string('keywords');
            $collection->integer('topic_id')->nullable();
            $collection->integer('access_id')->nullable();
            $collection->unsignedBigInteger('user_id');
            $collection->index('user_id');
            $collection->array('tags_id')->nullable();
            $collection->array('comments')->nullable();
            $collection->array('category_id');
            $collection->array('group_id')->nullable();
            // $collection->string('doi_id')->nullable();
            $collection->string('path');
            $collection->string('file_type'); //Type of file, zip, jpeg, png, exe
            $collection->bigInteger('file_size'); //Size of File
            $collection->softDeletes();
            $collection->timestamps();
            
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
