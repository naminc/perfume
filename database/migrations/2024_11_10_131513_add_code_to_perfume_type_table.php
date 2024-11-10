<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodeToPerfumeTypeTable extends Migration
{
    public function up()
    {
        Schema::table('perfume_type', function (Blueprint $table) {
            $table->string('code')->after('name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('perfume_type', function (Blueprint $table) {
            $table->dropColumn('code');
        });
    }
}
