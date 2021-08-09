<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        DB::table('account_user')->truncate();
        DB::table('accounts')->truncate();
        DB::table('defaults')->truncate();
        DB::table('packages')->truncate();
        DB::table('password_resets')->truncate();
        DB::table('post_user')->truncate();
        DB::table('posts')->truncate();
        DB::table('tokens')->truncate();
        DB::table('roles')->truncate();
        DB::table('settings')->truncate();
        DB::table('teams')->truncate();
        DB::table('users')->truncate();

        /* Table - Roles */
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'This is the administration role',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Client',
            'description' => 'This is a free user role meant for clients.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Team Admin',
            'description' => 'This is the team leaders role',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Team Member',
            'description' => 'This is the team members role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Table - Users */
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@white.com',
            'password' => Hash::make('secret'),
            'picture' => '../images/jana.jpg',
            'role_id' => 1,
            'team_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Bobby',
            'lastname' => 'Freeman',
            'email' => 'free@white.com',
            'password' => Hash::make('secret'),
            'picture' => '../images/lora.jpg',
            'role_id' => 2,
            'team_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Peter',
            'lastname' => 'Bates',
            'email' => 'teamadmin@white.com',
            'password' => Hash::make('secret'),
            'picture' => '../images/mike.jpg',
            'role_id' => 3,
            'team_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Elon',
            'lastname' => 'Musk',
            'email' => 'teammember@white.com',
            'password' => Hash::make('secret'),
            'picture' => '../images/james.jpg',
            'role_id' => 4,
            'team_id' => 3,
            'permissions' => '{"client": {"add": "0", "remove": "0"}, "member": {"create": "1", "delete": "1", "update": "1"}, "account": {"create": "1", "delete": "1", "update": "1"}}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Table - Defaults */
        DB::table('defaults')->insert([
            'name' => 'Active',
            'description' => 'Marking an account as active means the scraper is turned on.',
            'for_table' => 'accounts',
            'options' => '{"key": "active", "type": "checkbox", "hidden": "true", "default": "true", "message": null, "on_cost": "29", "has_cost": "true", "off_cost": "0", "subtitle": null}',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('defaults')->insert([
            'name' => 'Follower Update Frequency',
            'description' => 'How frequently you want your followers, following and commenter information to be updated.',
            'for_table' => 'accounts',
            'options' => '{"key": "follower_freq", "type": "text", "hidden": "false", "values": [{"key": "price_1JEZJjAy9PNycxnJaDx99rmc", "cost": "3.2", "value": "Weekly", "default": "false"}, {"key": "price_1JEZJjAy9PNycxnJ2k8hQeij", "cost": "1.6", "value": "Fortnightly", "default": "false"}, {"key": "price_1JEZJjAy9PNycxnJREOSgUax", "cost": "0.8", "value": "Monthly", "default": "true"}, {"key": "price_1JEZJjAy9PNycxnJsKUPDhHI", "cost": "0.4", "value": "Quarterly", "default": "false"}, {"key": "price_1JEZJjAy9PNycxnJjT04AufO", "cost": "0.2", "value": "Biannual", "default": "false"}, {"key": "price_1JEZJjAy9PNycxnJxT7tR3xc", "cost": "0.1", "value": "Annual", "default": "false"}], "message": "{n} follower updates", "has_cost": "true", "subtitle": null}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Table - Packages */
        DB::table('packages')->insert([
            'key' => 'admin',
            'name' => 'Admin',
            'description' => 'This is the package used for the shared team account, it has all access and is free.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'key' => 'starter',
            'name' => 'Starter',
            'description' => 'This gives you access to the basic usage of the tool.',
            'stripe_id' => 'prod_JmQlb11fOSbXap',
            'price_id' => 'price_1J8ru7Ay9PNycxnJMJeofUzQ',
            'cost' => '29',
            'options' => '{"includes": "(+) Review our account, (+) Add your accounts, (+) Basic scrape"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'key' => 'plus',
            'name' => 'Plus',
            'description' => 'This gives advanced features to the tool and a few other goodies.',
            'stripe_id' => 'prod_JmQmH6xQlRkKsj',
            'price_id' => 'price_1J8rv5Ay9PNycxnJcxZCTXwU',
            'cost' => '69',
            'options' => '{"includes": "Starter features &..., (+) Hashtag generator, (+) Followers & following, (+) Advanced scrape"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'key' => 'team',
            'name' => 'Team',
            'description' => 'This gives access to our team infrastructure and reporting tools.',
            'stripe_id' => 'prod_JmQnB1MQZZRKVv',
            'price_id' => 'price_1J8rvaAy9PNycxnJvfKD0PpJ',
            'cost' => '99',
            'options' => '{"includes": "Plus features &..., (+) Unlimited team size, (+) Share with clients, (+) Build reports"}',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /* Table - Accounts */
        // DB::table('accounts')->insert([
        //     'pk' => '8947951257',
        //     'username' => 'makemoneyfromhomeuk',
        //     'team_id' => 1,
        //     'quantity' => 0,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('accounts')->insert([
        //     'pk' => '1287006597',
        //     'username' => 'vindiesel',
        //     'team_id' => 3,
        //     'quantity' => 1426,
        //     'price_id' => 'price_1JEZJjAy9PNycxnJREOSgUax',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('accounts')->insert([
        //     'pk' => '8947951257',
        //     'username' => 'makemoneyfromhomeuk',
        //     'team_id' => 3,
        //     'quantity' => 1,
        //     'price_id' => 'price_1JEZJjAy9PNycxnJREOSgUax',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        /* Table - Subscriptions */
        // DB::table('subscriptions')->insert([
        //     'team_id' => 3,
        //     'name' => 'default',
        //     'stripe_id' => 'sub_JtRuwXzE5NCpwp',
        //     'stripe_status' => 'trialing',
        //     'stripe_price' => 'price_1J8rvaAy9PNycxnJvfKD0PpJ',
        //     'quantity' => 1,
        //     'trial_ends_at' => Date::parse('28-07-2021 12:58:32'),
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('subscriptions')->insert([
        //     'team_id' => 3,
        //     'name' => 'vindiesel',
        //     'stripe_id' => 'sub_JtRvMzEkxctL6s',
        //     'stripe_status' => 'active',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('subscriptions')->insert([
        //     'team_id' => 3,
        //     'name' => 'makemoneyfromhomeuk',
        //     'stripe_id' => 'sub_JtRx4K8XzHeIcn',
        //     'stripe_status' => 'active',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        /* Table - Subscription Items */
        // DB::table('subscription_items')->insert([
        //     'subscription_id' => 1,
        //     'stripe_id' => 'si_JtRuUWpgO0OJMj',
        //     'stripe_product' => 'prod_JmQnB1MQZZRKVv',
        //     'stripe_price' => 'price_1J8rvaAy9PNycxnJvfKD0PpJ',
        //     'quantity' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('subscription_items')->insert([
        //     'subscription_id' => 2,
        //     'stripe_id' => 'si_JtRvNCU3zRFx2N',
        //     'stripe_product' => 'prod_JsJglLXxWJDagU',
        //     'stripe_price' => 'price_1JEZ3NAy9PNycxnJ9fMA6x8u',
        //     'quantity' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('subscription_items')->insert([
        //     'subscription_id' => 2,
        //     'stripe_id' => 'si_JtRvEhwXDm3WWz',
        //     'stripe_product' => 'prod_JsJx9laieWxCrk',
        //     'stripe_price' => 'price_1JEZJjAy9PNycxnJREOSgUax',
        //     'quantity' => 1426,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('subscription_items')->insert([
        //     'subscription_id' => 3,
        //     'stripe_id' => 'si_JtRxf0vi8tbmfN',
        //     'stripe_product' => 'prod_JsJglLXxWJDagU',
        //     'stripe_price' => 'price_1JEZ3NAy9PNycxnJ9fMA6x8u',
        //     'quantity' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('subscription_items')->insert([
        //     'subscription_id' => 3,
        //     'stripe_id' => 'si_JtRxpcNs04T0aT',
        //     'stripe_product' => 'prod_JsJx9laieWxCrk',
        //     'stripe_price' => 'price_1JEZJjAy9PNycxnJREOSgUax',
        //     'quantity' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        /* Table - Teams */
        DB::table('teams')->insert([
            'name' => 'Shared',
            'package_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Recklessly Sunbeamed Buses',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Needlessly Simple Nuns',
            'package_id' => 4,
            'stripe_id' => 'cus_JtRurjKON1B2qu',
            'pm_type' => 'visa',
            'pm_last_four' => '4242',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
