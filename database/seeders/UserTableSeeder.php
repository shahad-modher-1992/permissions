<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name'  =>'super_admin',
            'email' => "superhero@gmail.com",
            'password' =>bcrypt('secret')
        ]);
        $user->roles()->attach(1);
    }
}
