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
        //DB::table('users')->insert([
          //  'name'=>'rafael',
            //'email'=>'rafael@gmail.com',
            //'password'=>'123456'
        //]);
        DB::table('users')->insert([
            'name'=>'maria',
            'email'=>'maria@gmail.com',
            'password'=>md5('12345678')
        ]);
    }
}
