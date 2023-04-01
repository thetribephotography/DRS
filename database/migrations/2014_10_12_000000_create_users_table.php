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
        Schema::create('users', function (Blueprint $collection) {
            // $collection->id();
            // $collection->index();
            $collection->file('profile_picture');
            $collection->string('name');
            $collection->string('slug');
            $collection->string('first_name');
            $collection->string('last_name');
            $collection->string('email')->unique();
            $collection->timestamp('email_verified_at')->nullable();
            $collection->string('password');
            $collection->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
