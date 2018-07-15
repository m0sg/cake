<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareArticles2TagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles2tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articles_id')->unsigned();
            $table->foreign('articles_id')->references('id')->on('articles');
            $table->integer('tags_id')->unsigned();
            $table->foreign('tags_id')->references('id')->on('tags');

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
        Schema::dropIfExists('articles2tags');
    }
}
