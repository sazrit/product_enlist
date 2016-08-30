<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->id = 1;
        $user1->name = 'ifti';
        $user1->email = 'ifti@gmail.com';
        $user1->password = bcrypt("abc123");
        $user1->user_type_id = 1;
        $user1->save();
    }
}
