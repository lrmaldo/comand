<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeedCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
       
        $user->name = 'User';
        $user->email = 'example@example.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
