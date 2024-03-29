<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_contents', function (Blueprint $table) {
            $table->id();
            $table->string('contents_url'); // 記事のURL
            $table->unsignedBigInteger('parent_article_data'); // 記事の親データを記入する
            $table->integer('order'); // 記事の順番を記入する
            $table->longText('contents_article'); // 記事のコンテンツ内容
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
        Schema::dropIfExists('file_contents');
    }
}
