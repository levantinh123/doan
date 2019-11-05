<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert(array(
            array(
                'name'=>'Nguyễn Sơn Hà',
                'birthday'=>'1999-12-13',
                'address'=>'Hội An',
                'user_id'=>1
            ),
            array(
                'name'=>'Le Văn Tịnh',
                'birthday'=>'1999-02-02',
                'address'=>'Huế',
                'user_id'=>2
            ),
        ));
    }
}
