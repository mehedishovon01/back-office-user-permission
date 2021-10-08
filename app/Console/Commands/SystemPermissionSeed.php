<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SystemPermissionSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'systempermission:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'System Permission Seeded Successfully!';

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
        Artisan::call('db:seed', [
            '--class' => 'Database\Seeders\permissions\PermissionSeeder',
        ]);

        $this->info('System Permission Seeded Successfully!');
    }
}
