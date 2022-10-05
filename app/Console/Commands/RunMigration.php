<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;




class RunMigration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Correr migraciones y seeders';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       
        $this->call('migrate');
            
        
        $this->call('db:seed');

        
    }

}
