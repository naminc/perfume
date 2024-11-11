<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perfume_list', function (Blueprint $table) {
            $table->string('concentration')->nullable(); // Cột nồng độ, kiểu chuỗi
            $table->integer('volume_ml')->nullable();     // Cột dung tích, kiểu số nguyên
        });
    }

    public function down()
    {
        Schema::table('perfume_list', function (Blueprint $table) {
            $table->dropColumn(['concentration', 'volume_ml']);
        });
    }
};
