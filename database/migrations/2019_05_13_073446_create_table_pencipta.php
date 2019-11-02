<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePencipta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencipta', function (Blueprint $table)
        {
            $table->integer('id_berita')->unsigned()->primary('id_berita');
            $table->string('nama_pencipta');
            $table->timestamps();
            $table->foreign('id_berita')
            ->references('id')->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencipta');
    }
}
