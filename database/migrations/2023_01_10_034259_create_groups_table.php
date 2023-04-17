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
        Schema::create('groups', function (Blueprint $collection) {
            // $table->id();
            $collection->string('name');
            $collection->string('slug')->unique();
            $collection->unsignedBigInteger('upload')->nullable();
            $collection->string('group_desc')->nullable();
            $collection->unsignedBigInteger('user_id');
            $collection->index('user_id');
            $collection->array('group_members')->nullable();
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
        Schema::dropIfExists('groups');
    }
};
