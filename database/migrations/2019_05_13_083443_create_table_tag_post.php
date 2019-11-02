<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTagPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_post', function (Blueprint $table)
        {
        //create table tag_post
        $table->integer('id_post')->unsigned()->index();
        $table->integer('id_tag')->unsigned()->index();
        $table->timestamps();
        //Set PK
        $table->primary(['id_post','id_tag']);
        //Set FK tag_post --siswa
        $table->foreign('id_post')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        //Set FK tag_post ke tag
        $table->foreign('id_tag')
                ->references('id')
                ->on('tag')
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
        Schema::dropIfExists('tag_post');
    }
}
