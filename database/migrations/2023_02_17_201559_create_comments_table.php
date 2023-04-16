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
        Schema::create('comments', function (Blueprint $collection) {
            //Currently onhold
            // $collection->id();
            $collection->integer('user_id');
            $collection->index('upload_id');
            $collection->unsignedBigInteger('upload_id');
            $collection->longText('content');
            $collection->timestamps();
            $collection->integer('status');
            $collection->array('replies');
            $collection->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};