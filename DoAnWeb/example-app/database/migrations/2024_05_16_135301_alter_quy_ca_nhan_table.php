<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterQuyCaNhanTable extends Migration
{
    public function up()
    {
        Schema::table('_quy_ca_nhan', function (Blueprint $table) {
            $table->string('description')->nullable()->after('Ngay_gop');
        });
    }

    public function down()
    {
        Schema::table('_quy_ca_nhan', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
