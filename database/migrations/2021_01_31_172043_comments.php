<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('article_id')->nullable();//id//ilişki kuracağın sütunun veri tipi unsigned olmalı

            $table->string('name');
            $table->string('email');
            $table->longText('message');
            $table->timestamps();
            $table->foreign('article_id')//bağlanacak sütunun adı(ilişki kurduğun tablo adı)
            ->references('id')
            ->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');

    }
}
