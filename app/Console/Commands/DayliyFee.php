<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DayliyFee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:fee';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process users daily fees';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user) {

        }
    }
}
