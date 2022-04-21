<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Roles::create([
            'role_name' => 'admin',
            'deskripsi' => ''
        ]);
        Roles::create([
            'role_name' => 'guru',
            'deskripsi' => ''
        ]);

        User::create([
            'id_role' => '1',
            'username' => 'lentera',
            'password' => bcrypt('password')
        ]);
    }
}
