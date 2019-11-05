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
        DB::table('categories')->insert(array(
            array(
                'name'=>'Pháp Luật'
            ),
            array(
                'name'=>'Giao Duc'
            ),
            array(
                'name'=>'Xã Hội'
            ),
            array(
                'name'=>'Kinh Tế'
            ),
            array(
                'name'=>'Chính Trị -Van Hoa'
            ),
            array(
                'name'=>'Du Lịch' 
            ),
            array(
                'name'=>'Thế Giới'
            ),
            array(
                'name'=>'Thế Thao'
            ),
            array(
                'name'=>'Sức Khỏe - Đời Sống'
            ),
            array(
                'name'=>'Khoa Học'
            ),
            array(
                'name'=>'Kinh Doanh'
            )
        ));
    }
}
