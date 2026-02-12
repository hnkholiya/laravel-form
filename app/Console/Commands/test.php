<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\UserController;
use Illuminate\Validation\Rules\In;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testcmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a test console Command ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $user=10;
        // for($i=0;$i<$user;$i++){
        //     $this->info($i);
        // }
        // $this->info($user." created successfully");

         $userController = new UserController();
        $userController->index(); // This method calculates $totalUsers but doesn't return it.
       $this->info($userController->index());

    }
}
