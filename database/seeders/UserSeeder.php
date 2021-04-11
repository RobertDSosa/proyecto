<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Administrador",
            'email' => 'admin@admin.com',
            'password' => bcrypt(10202541),
        ])->assignRole('Admin');
        User::create([
            'name' => "Secretario",
            'email' => "secretario@secretario.com",
            'password' => bcrypt(10202541) 
        ])->assignRole('Secretario');
        User::create([
            'name' => "Supervisor",
            'email' => "supervisor@supervisor.com",
            'password' => bcrypt(10202541)
        ])->assignRole('Supervisor');
        User::create([
            'name' => "Lider",
            'email' => "lider@lider.com",
            'password' => bcrypt(10202541)
        ])->assignRole('Lider');
        User::create([
            'name' => "Maestro",
            'email' => "maestro@maestro.com",
            'password' => bcrypt(10202541)
        ])->assignRole('Maestro');
        User::create([
            'name' => "Editor",
            'email' => "editor@editor.com",
            'password' => bcrypt(10202541)
        ])->assignRole('Editor');
        
        User::factory(3)->create();
    }
}
