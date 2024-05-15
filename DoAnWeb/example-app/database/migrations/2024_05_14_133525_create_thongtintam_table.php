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
        Schema::create('thongtintam', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("NoiDung")->nullable();
            $table->string("TenBe")->nullable();
            $table->string("HinhAnh")->nullable();
            $table->string("Email")->nullable();
            $table->string("HotenNguoi3")->nullable();
            $table->boolean('isDelete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thongtintam');
    }
};
