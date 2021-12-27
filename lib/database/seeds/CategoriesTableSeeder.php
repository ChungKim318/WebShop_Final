<?php

use Illuminate\Database\Seeder;

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
                'cate_name'=>'SSD',
                'cate_slug'=>str_slug('SSD')
            ],
            [
                'cate_name'=>'HDD',
                'cate_slug'=>str_slug('HDD')
            ],
        ];
        DB::table('vp_categories')->insert($data);
    }
}
