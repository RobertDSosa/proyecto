<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->integer('felipes',)->nullable();
            $table->integer('discipulos')->nullable();
            $table->integer('ninos')->nullable();
            $table->integer('ausentes')->nullable();
            $table->integer('amigos')->nullable();
            $table->integer('domingo_hermanos')->nullable();
            $table->integer('domingo_amigos')->nullable();
            $table->integer('domingo_ninos')->nullable();
            $table->integer('ofrenda')->nullable();
            $table->integer('ofrenda_ninos')->nullable();
            $table->integer('vea')->nullable();
            $table->integer('discipulado_uno')->nullable();
            $table->integer('discipulado_dos')->nullable();
            $table->integer('mision_amigo')->nullable();
            $table->integer('consolidacion')->nullable();
            $table->integer('convertidos_adultos')->nullable();
            $table->integer('convertidos_ninos')->nullable();
            $table->integer('reconciliaciones')->nullable();
            $table->integer('liderazgo')->nullable();
            $table->text('observaciones')->nullable();
            $table->date('fecha');

            $table->unsignedBigInteger('group_id')->nullable();

            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null');

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
        Schema::dropIfExists('reports');
    }
}
