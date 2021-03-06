<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('books_id')->unsigned();
            $table->text('sinopsis');
            $table->text('kelebihan');
            $table->text('kekurangan');
            $table->text('kesimpulan');
            $table->timestamps();
            $table->foreign('books_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review', function (Blueprint $table) {
            $table->dropForeign('review_books_id_foreign');
        });
        Schema::dropIfExists('review');
    }
}
