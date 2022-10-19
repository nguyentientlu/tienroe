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
        //
        Schema::create('baiviet', function (Blueprint $table) {
            $table->id("ma_baiviet");
            $table->string("tieude", 200);
            $table->string("ten_bhat", 200);
            $table->BigInteger("ma_theloai")->unsigned()->increment();
            $table->string("tomtat", 200);
            $table->text("noidung", 200);
            $table->BigInteger("ma_tgia")->unsigned()->increment();
            $table->date("ngayviet", 200);
            $table->string("hinhanh", 200);
            $table->foreign('ma_theloai')->references('ma_theloai')->on('theloai');
            $table->foreign('ma_tgia')->references('ma_tgia')->on('tacgia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists("baiviet");
    }
};