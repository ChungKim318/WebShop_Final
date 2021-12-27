<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [
                'email'=>'kuuhaku2810@gmail.com',
                'password'=>bcrypt('rin9x2810'),
                'level'=>1
            ],
            [
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'level'=>1
            ],
        ];
        DB::table('vp_users')->insert($data);
    }
}
