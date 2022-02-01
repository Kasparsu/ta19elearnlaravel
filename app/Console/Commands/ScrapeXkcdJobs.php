<?php

namespace App\Console\Commands;

use App\Jobs\ScrapeXkcdJob;
use Illuminate\Console\Command;

class ScrapeXkcdJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:xkcdjobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        for($i = 2569; $i>2559; $i--) {
           ScrapeXkcdJob::dispatch($i);
        }
        return 0;
    }
}
