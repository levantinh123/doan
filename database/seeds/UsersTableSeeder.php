<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'email'=>'tinhle@gmail.com',
                'password'=>'123asd',
            ),
            array(
                'email'=>'sonha@gmail.com',
                'password'=>'123456',
            ),
        ));
    }
}
