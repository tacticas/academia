<?php

use App\League;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       League::create([
            'name' => 'Sin clasificar',
            'img' => 'img/bronce.png'
        ]);
       League::create([
            'name' => 'Hierro',
            'img' => 'img/bronce.png'
        ]);
       League::create([
            'name' => 'Bronce',
            'img' => 'img/bronce.png'
        ]);
       League::create([
            'name' => 'Plata',
            'img' => 'img/plata.png'
        ]);
       League::create([
            'name' => 'Oro',
            'img' => 'img/oro.png'
        ]);
       League::create([
            'name' => 'Platino',
            'img' => 'img/platino.png'
        ]);
       League::create([
            'name' => 'Diamante',
            'img' => 'img/diamante.png'
        ]);
       League::create([
            'name' => 'Maestro',
            'img' => 'img/maestro.png'
        ]);
       League::create([
            'name' => 'Gran Maestro',
            'img' => 'img/maestro.png'
        ]);
       League::create([
            'name' => 'Retador',
            'img' => 'img/retador.png'
        ]);

    }
}
