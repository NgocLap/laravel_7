<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class InformationTableSeeder extends Seeder
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
                'cate_name' => 'Đời Sống',
                'cate_slug'=> str::slug('DS')
            ],
            [
                'cate_name' => 'Ẩm Thực',
                'cate_slug' => str::slug('AT')
            ],
        ];
        DB::table('vp_information')->insert($data);
    }
}
