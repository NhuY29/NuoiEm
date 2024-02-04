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
        Schema::create('ToChucTuThien', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("Ten")->nullable();
            $table->string("MoTa")->nullable();
            $table->string("DiaChi")->nullable();
            $table->string("SDT")->nullable();
            $table->string("Email")->nullable();
            $table->string("ThongTin")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ToChucTuThien');
    }
};
