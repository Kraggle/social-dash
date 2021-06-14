<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('teams')->insert([
            'id' => 1,
            'name' => 'Shared',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
