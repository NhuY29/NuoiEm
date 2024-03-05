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
        Schema::create('_ben_thu3', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("Ten")->nullable();
            $table->boolean("GioiTinh")->nullable();
            $table->string("DiaChi")->nullable();
            $table->string("SDT")->nullable();
            $table->string("NgheNghiep")->nullable();
            $table->string("NoiCongTac")->nullable();
            $table->boolean('isDelete')->default(false);
            $table->timestamps();
        });

        Schema::create('_tre_em', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("Ten")->nullable();
            $table->boolean("GioiTinh")->nullable();
            $table->string("TenTruongHoc")->nullable();
            $table->string("DiaChi")->nullable();
            $table->unsignedBigInteger('BenThu3_id');
            $table->foreign('BenThu3_id')->references('id')->on('_ben_thu3');
            $table->boolean('isDelete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_ben_thu3');
        Schema::dropIfExists('_tre_em');
    }
};
