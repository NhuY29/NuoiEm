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
        Schema::create('_tai_tro', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid('Quy_id');
            $table->foreign('Quy_id')->references('id')->on('_quy');
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->datetime("SoTien")->nullable();
            $table->string("PhuongThucTaiTro")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tai_tro');
    }
};
