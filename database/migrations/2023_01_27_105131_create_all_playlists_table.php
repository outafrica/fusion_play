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
        Schema::create('all_playlists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('spotify_list_id')->nullable();
            $table->foreignId('apple_music_list_id')->nullable();
            $table->string('playlist_items');
            $table->string('url');
            $table->integer('sharecount')->default(0);
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
        Schema::dropIfExists('all_playlists');
    }
};
