<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $create = Permission::create([
            'display_name' => 'create',
            'description' => 'it can be everythings'
           ]);
           $update = Permission::create([
            'display_name' => 'update',
            'description' => 'it can be everythings'
           ]);
           $delete = Permission::create([
            'display_name' => 'delete',
            'description' => 'it can be everythings'
           ]);
           $read = Permission::create([
            'display_name' => 'read',
            'description' => 'it can be everythings'
           ]);
   
    }
}
