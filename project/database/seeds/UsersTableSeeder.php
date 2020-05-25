<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'sample';
        $user->email = 'sample@sample.com';
        $user->password = 'samplepassword';
        $user->save();

    }
}
