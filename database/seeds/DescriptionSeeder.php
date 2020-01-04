<?php

use App\Description;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Description::create([
            'idUser' => '1',
            'achievement' => 'Desarrolar esta plataforma'
        ]);
        Description::create([
            'idUser' => '1',
            'achievement' => 'Retador 4 Veces'
        ]);
    }
}
