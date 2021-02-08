<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->comment('usersの外部キー');
            $table->bigInteger('book_id')->unsigned()->comment('booksへの外部キー');
            $table->timestamps();


            $table->foreign('user_id')
                   ->references('id')->on('users')
                   ->onDelete('cascade');

           $table->foreign('book_id')
                 ->references('id')->on('books')
                 ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_marks');
    }
}
