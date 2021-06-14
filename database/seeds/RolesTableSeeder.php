<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Admin',
            'description' => 'This is the administration role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Free',
            'description' => 'This is the unpaid user role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Team Admin',
            'description' => 'This is the team leaders role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Team Member',
            'description' => 'This is the team members role',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
