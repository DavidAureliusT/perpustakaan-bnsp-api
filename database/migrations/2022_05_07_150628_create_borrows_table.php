<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->increments("borrow_id");
            $table->unsignedInteger('member_id');
            $table->foreign('member_id')->references('user_id')->on('users');
            $table->unsignedInteger('book_id');
            $table->foreign('book_id')->references('book_id')->on('books');
            $table->date("return_date");
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
        Schema::dropIfExists('borrows');
    }
};
