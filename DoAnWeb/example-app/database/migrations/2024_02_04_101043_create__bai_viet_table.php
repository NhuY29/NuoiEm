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
        Schema::create('_bai_viet', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("TieuDe")->nullable();
            $table->string("NoiDung")->nullable();
            $table->dateTime("NgayDang")->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('TreEm_id');
            $table->foreign('TreEm_id')->references('id')->on('_tre_em');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_bai_viet');
    }
};
