<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //si se imite el método select es un selector de todo (*)
        $roleId = Role::where('name','=','Jungla')
        ->value('id');

        
        User::create([
            'name' => 'Angel',
            'email' => 'uvangel.gomez@gmail.com',
            'password' => bcrypt('laravel'),
            'apellido' => 'Gomez',
            'nombre_de_invocador' => 'Tacticas',
            'server_id' => '1',
            'role_id' => $roleId,
            'league_id' => '6',
            'price' => '70',
            'img' => '/img/profile.png',
            'about' => 'Mi Bio',
            'type_id' => '2',
            
        ]);

        
        factory(User::class,20)->create();



    }
}
