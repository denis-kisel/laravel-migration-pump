<?php


namespace DenisKisel\LaravelMigrationPump\Commands;


use Illuminate\Console\Command;

class PumpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pump';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pump for migration';

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
        $this->call('migrate');
        $this->call('migrate:rollback');
        $this->call('migrate');
    }
}
