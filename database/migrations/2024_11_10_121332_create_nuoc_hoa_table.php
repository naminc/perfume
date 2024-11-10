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
    Schema::create('perfume_list', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Tên nước hoa
        $table->text('description')->nullable(); // Mô tả nước hoa
        $table->decimal('price', 10, 2); // Giá nước hoa
        $table->foreignId('id_type')->constrained('perfume_type'); // Khóa ngoại liên kết với bảng loại nước hoa
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nuoc_hoa');
    }
};
