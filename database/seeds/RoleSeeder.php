<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Role::create([
            'name' => 'Superior'
        ]);
        Role::create([
            'name' => 'Jungla'
        ]);
        Role::create([
            'name' => 'Central'
        ]);
        Role::create([
            'name' => 'Inferior'
        ]);
        Role::create([
            'name' => 'Soporte'
        ]);
    }
}
