<?php

namespace App\Console\Commands;

use App\Models\Question;
use Illuminate\Console\Command;

class DeleteModels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete-models {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description
                                {user : The ID of the user}';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userId = $this->argument('user');

        //Question::where('id', '<', 1)->forceDelete();
        // info('my command');
        //Question::truncate();

        $name = $this->ask('What is your name?');
        $password = $this->secret('What is your password?');

        if ($name === 'Petr') {
            $this->error('Error description');
        } else {
            $this->info('Info description');
        }

        // https://laravel.com/docs/10.x/artisan#progress-bars

//        $users = App\Models\User::all();
//
//        $bar = $this->output->createProgressBar(count($users));
//        $bar->start();
//
//        foreach ($users as $user) {
//            sleep(1);
//            $bar->advance();
//        }
//
//        $bar->finish();
    }
}
