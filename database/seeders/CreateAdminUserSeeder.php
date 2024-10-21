<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

//        $role = Role::create(['name' => 'Admin']);
//        $permissions = Permission::pluck('id','id')->all();
//        $role->syncPermissions($permissions);
//        $user->assignRole([$role->id]);

    }

}