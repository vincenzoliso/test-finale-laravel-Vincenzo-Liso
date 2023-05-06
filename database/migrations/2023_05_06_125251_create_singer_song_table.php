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
        Schema::create('singer_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('song_id')->nullable();
            $table->unsignedBigInteger('singer_id')->nullable();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('set null');
            $table->foreign('singer_id')->references('id')->on('singers')->onDelete('set null');
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
        Schema::dropIfExists('singer_song');
    }
};
