<?php

namespace Revolution\Network\Console\Commands;

use Illuminate\Console\Command as Console;

class RevolutionNetworkCommand extends Console
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rev-network:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Revolution Network Package';

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
        $this->info('revolution network installed successfully');
    }
}
