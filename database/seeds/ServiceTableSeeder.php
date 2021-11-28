<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ServiceTableSeeder extends Seeder
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
                'ser_name' => 'Điều khoản sử dụng',
                'ser_slug'=> str::slug('DKSD')
            ],
            [
                'ser_name' => 'Chính sách bảo mật',
                'ser_slug' => str::slug('CSBM')
            ],
        ];
        DB::table('vp_service')->insert($data);
    }
}
