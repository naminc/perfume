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
        $table->string('images')->nullable()->after('price'); // Thêm cột images sau cột price
    });
}

public function down()
{
    Schema::table('perfume_list', function (Blueprint $table) {
        $table->dropColumn('images'); // Xóa cột images khi rollback
    });
}

};
