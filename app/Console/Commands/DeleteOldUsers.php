<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class DeleteOldUsers extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete data that is more than 3 days older';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $date = now()->subDays(3);

        User::whereNotIn('id', [1, 2, 3])->where('created_at', '<=', $date)->delete();
        Role::whereNotIn('id', [1, 2, 3])->where('created_at', '<=', $date)->delete();
    }
}
