<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('announcements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type_of_announcement');
            $table->string('location');
            $table->string('description');
            $table->string('image_path')->nullable();
            $table->string('image_thumb')->nullable();
            $table->string('file_path')->nullable();
            $table->string('payment')->nullable();
            $table->string('country')->nullable();
            $table->integer('is_featured')->nullable();
            $table->string('title')->nullable();
            $table->integer('status')->nullable();
            $table->timestamp('is_featured_dirty')->nullable();
            $table->integer('days')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('announcements');
    }
}
