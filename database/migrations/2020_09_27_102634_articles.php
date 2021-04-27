<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');//id//ilişki kuracağın sütunun veri tipi unsigned olmalı
            $table->string('title');
            $table->string('image');
            $table->longText('content');
            $table->integer('hit')->default(0);
            $table->integer('status')->default(0)->comment('0:pasif 1:aktif');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('category_id')//bağlanacak sütunun adı(ilişki kurduğun tablo adı)
                ->references('id')
                ->on('categories');//categoriess tablosundaki id alanını category_ id ile bağla
               // ->onDelete('cascade');//eğer category tablosu silinirse ona ait bu ilişkisel tablonunda silineceğini belirtir

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
