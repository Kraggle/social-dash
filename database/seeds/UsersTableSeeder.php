<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(App\User::class)->create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@white.com',
            'role_id' => 1,
            'picture' => '../white/img/jana.jpg'
        ]);

        factory(App\User::class)->create([
            'id' => 2,
            'name' => 'Free',
            'email' => 'free@white.com',
            'role_id' => 2,
            'picture' => '../white/img/lora.jpg'
        ]);

        factory(App\User::class)->create([
            'id' => 3,
            'name' => 'Team Admin',
            'email' => 'teamadmin@white.com',
            'role_id' => 3,
            'picture' => '../white/img/mike.jpg'
        ]);

        factory(App\User::class)->create([
            'id' => 4,
            'name' => 'Team Member',
            'email' => 'teammember@white.com',
            'role_id' => 4,
            'picture' => '../white/img/mike.jpg'
        ]);
    }
}
