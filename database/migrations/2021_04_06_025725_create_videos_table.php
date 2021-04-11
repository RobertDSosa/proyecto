<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            
            $table->string('url')->nullable();

            $table->string('name')->nullable();

            $table->string('youtube_link')->nullable();

            $table->unsignedBigInteger('videoable_id');

            $table->string('videoable_type');

            // $table->primary(['videoable_id', 'videoable_type']);

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
        Schema::dropIfExists('videos');
    }
}
