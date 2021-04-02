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
            'name' => "Robert Sosa",
            'email' => 'admin@admin.com',
            'password' => bcrypt(10202541),
        ])->assignRole('Admin');
        User::factory(9)->create();
    }
}
