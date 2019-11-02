<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nama_kategori');
            $table->timestamps();
        });
        Schema::table('posts',function(Blueprint $table){
            $table->integer('id_kategori')->unsigned()->nullable();
            $table->foreign('id_kategori')
            ->references('id')
            ->on('kategori')
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
        $table->dropForeign('posts_id_kategori_foreign');
        Schema::dropIfExists('kategori');
    }
}
