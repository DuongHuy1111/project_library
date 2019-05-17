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
        $user = new \App\User();
        $user->name = 'Duong Huy';
        $user->email = 'huy.alex@gmail.com';
        $user->phone = '0931234569';
        $user->address = 'Ha noi';
        $user->image = '';
        $user->role_id = 9;
        $user->password = bcrypt("12345678");
        $user->save();
    }
}
