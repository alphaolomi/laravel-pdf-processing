<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AppInstall extends Command
{
    protected $signature = 'app:istall';

    protected $description = 'Install and setup the application';

    public function handle()
    {
        return Command::SUCCESS;
    }
}
