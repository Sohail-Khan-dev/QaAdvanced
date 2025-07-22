<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class OptimizeWebsite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'website:optimize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize the website for better performance';

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
        $this->info('Starting website optimization...');

        // Clear all caches
        $this->info('Clearing caches...');
        Artisan::call('cache:clear');
        $this->info('Cache cleared.');
        
        Artisan::call('config:clear');
        $this->info('Config cache cleared.');
        
        Artisan::call('view:clear');
        $this->info('View cache cleared.');
        
        Artisan::call('route:clear');
        $this->info('Route cache cleared.');

        // Optimize for production
        $this->info('Optimizing for production...');
        Artisan::call('config:cache');
        $this->info('Config cached.');
        
        Artisan::call('route:cache');
        $this->info('Routes cached.');
        
        Artisan::call('view:cache');
        $this->info('Views cached.');
        
        Artisan::call('optimize');
        $this->info('Application optimized.');

        $this->info('Website optimization completed successfully!');
        $this->info('Note: For image optimization, please follow the instructions in optimize-images.md');

        return 0;
    }
}
