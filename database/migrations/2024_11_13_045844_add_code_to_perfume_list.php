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
        $table->string('code')->unique()->after('name'); // Thêm cột code và đảm bảo tính duy nhất
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('perfume_list', function (Blueprint $table) {
        $table->dropColumn('code');
    });
}
};
