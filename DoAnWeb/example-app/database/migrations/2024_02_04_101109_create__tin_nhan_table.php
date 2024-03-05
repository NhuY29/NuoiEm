<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_tin_nhan', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("NoiDung")->nullable();
            $table->dateTime("DuongDan")->nullable();
            $table->unsignedBigInteger('NguoiGui_id');
            $table->foreign('NguoiGui_id')->references('id')->on('users');
            $table->unsignedBigInteger('NguoiNhan_id');
            $table->foreign('NguoiNhan_id')->references('id')->on('users');
            $table->boolean('isDelete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tin_nhan');
    }
};
