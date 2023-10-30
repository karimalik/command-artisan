<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class listUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'list:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists of users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all(['ID', 'Name', 'Email']);

        if ($users->isEmpty()) {
            $this->info('No users found.');
        } else {

            $this->table(
                ['ID', 'Name', 'Email'],
                $users
            );
        }
    }
}
