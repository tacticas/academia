<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'HellAdmin'
        ]);
        Type::create([
            'name' => 'HellCoach'
        ]);
        Type::create([
            'name' => 'Invocador'
        ]);
    }
}
