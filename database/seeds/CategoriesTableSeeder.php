<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'cate_name' => 'Tiểu Thuyết',
                'cate_slug'=> str::slug('TT')
            ],
            [
                'cate_name' => 'Văn Học',
                'cate_slug' => str::slug('VH')
            ],
        ];
        DB::table('vp_categories')->insert($data);
    }
}
