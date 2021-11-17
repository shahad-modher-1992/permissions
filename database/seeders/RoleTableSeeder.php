<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create([
            'name' => 'super_admin',
            'display_name' => 'supername'
        ]);
        $user = Role::create([
            'name' => 'user',
            'display_name' => 'user'
        ]);
    }
}
