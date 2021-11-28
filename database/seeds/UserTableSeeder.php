<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // [
            //     'email'=>'ngoclap858@gmail.com',
            //     'password'=>bcrypt('lapluong123'),
            //     'level'=>1
            // ],
            // [
            //     'email'=>'admin@gmail.com',
            //     'password'=>bcrypt('admin'),
            //     'level'=>1
            // ],
            [
                'username'=>'master',
                'email'=>'master@gmail.com',
                'password'=>bcrypt('admin'),
                'level'=>1
            ],
            
        ];
        DB::table('vp_users')->insert($data);
    }
}
