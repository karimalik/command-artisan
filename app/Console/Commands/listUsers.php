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
    protected $description = 'List of users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->table(
            ['ID', 'Name', 'Email'],
            User::all(['ID', 'Name', 'Email'])->toArray()
        );
    }
}
