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
        Schema::create('_nguoi_nhannuoi', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger('TreEm_id');
            $table->foreign('TreEm_id')->references('id')->on('_tre_em');
            $table->string('HoTen')->nullable();
            $table->string('Email')->nullable();
            $table->string('CCCD')->nullable();
            $table->string('SDT')->nullable();
            $table->string('NgheNghiep')->nullable();
            $table->double('ThuNhapTrungBinh')->nullable();
            $table->text('DiaChi')->nullable();
            $table->boolean('isDelete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_nguoi_nhannuoi');
    }
};
