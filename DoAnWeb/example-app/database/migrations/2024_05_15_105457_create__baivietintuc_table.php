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
        Schema::create('_baivietintuc', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->text("HinhAnh")->nullable();
            $table->text("TieuDe")->nullable();
            $table->text("NoiDung")->nullable();
            $table->text("Link")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_baivietintuc');
    }
};
