<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *-
     * @return void
     */

    public function up()
    {
        Schema::create('articles_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('articles_id')->unsigned();  $table->unsignedBigInteger('taggable_type')->unsigned();
            $table->unsignedBigInteger('tags_id')->unsigned();
            $table->unsignedBigInteger('taggable_id')->unsigned();

//            //FOREIGN KEY CONSTRAINTS
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
//
//            //SETTING THE PRIMARY KEYS
            $table->unique(['article_id','tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tags');
    }
}
