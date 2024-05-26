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
        Schema::create('_hinh_anh', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("DuongDan")->nullable();
            $table->text("Video")->nullable();
            $table->string("ChuThich")->nullable();
            $table->unsignedBigInteger('BaiViet_id')->nullable();
            $table->foreign('BaiViet_id')->references('id')->on('_bai_viet');
            $table->unsignedBigInteger('TreEm_id');
            $table->foreign('TreEm_id')->references('id')->on('_tre_em');
            $table->boolean('isDelete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hinh_anh');
    }
};
