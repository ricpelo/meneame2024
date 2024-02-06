<?php

namespace App\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;

class InicializarBaseDatos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:inicia-bd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inicializa la base de datos';

    /**
     * Execute the console command.
     */
    public function handle(DatabaseSeeder $ds)
    {
        $ds->run();
        $this->info('Inicialización realizada con éxito.');
    }
}
