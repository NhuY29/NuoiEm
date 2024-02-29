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
        Schema::create('_quy', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("Ten")->nullable();
            $table->string("MoTa")->nullable();
            $table->boolean("TrangThai")->nullable();
            $table->unsignedBigInteger('TreEm_id');
            $table->foreign('TreEm_id')->references('id')->on('_tre_em');
            $table->unsignedBigInteger('ToChucTuThien_id');
            $table->foreign('ToChucTuThien_id')->references('id')->on('ToChucTuThien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_quy');
    }
};
