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
            $collection->string('language');
            $collection->string('author');
            $collection->string('keywords');
            $collection->integer('topic_id')->nullable();
            $collection->integer('access_id')->nullable();
            $collection->unsignedBigInteger('user_id');
            $collection->index('user_id');
            $collection->unsignedBigInteger('tags_id');
            $collection->index('tags_id')->nullable();
            // $collection->string('doi_id')->nullable();
            $collection->string('path');
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
