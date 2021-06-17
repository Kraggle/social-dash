<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('account_setting')->truncate();
        DB::table('account_user')->truncate();
        DB::table('post_setting')->truncate();
        DB::table('post_user')->truncate();
        DB::table('setting_team')->truncate();
        DB::table('setting_user')->truncate();

        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('accounts')->truncate();
        DB::table('defaults')->truncate();
        DB::table('posts')->truncate();
        DB::table('settings')->truncate();
        DB::table('teams')->truncate();
        DB::table('teams')->truncate();

        DB::table('teams')->insert([
            'id' => 1,
            'name' => 'Shared',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('accounts')->insert([
            'id' => 1,
            'pk' => 8947951257,
            'username' => 'makemoneyfromhomeuk',
            'team_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->call([RolesTableSeeder::class, UsersTableSeeder::class]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
