<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->dateTime('published_at');
            $table->string('language');
            $table->mediumText('author');
            $table->mediumText('keywords');
            $table->unsignedinteger('topic_id')->nullable();
            $table->unsignedinteger('access_id')->nullable();
            $table->string('doi_id')->nullable();
            $table->string('path');

            
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
        Schema::dropIfExists('uploads');
    }
};
