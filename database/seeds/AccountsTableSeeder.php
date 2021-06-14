<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('accounts')->insert([
            'id' => 1,
            'pk' => 8947951257,
            'username' => 'makemoneyfromhomeuk',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
