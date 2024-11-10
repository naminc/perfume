<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdatePerfumeTypeCodeSeeder extends Seeder
{
    public function run()
    {
        DB::table('perfume_type')->where('name', 'Nước hoa nam')->update(['code' => 'nuoc-hoa-nam']);
        DB::table('perfume_type')->where('name', 'Nước hoa nữ')->update(['code' => 'nuoc-hoa-nu']);
        DB::table('perfume_type')->where('name', 'Nước hoa unisex')->update(['code' => 'nuoc-hoa-unisex']);
    }
}
