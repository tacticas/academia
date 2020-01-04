<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'apellido' => str_random(10),
        'nombre_de_invocador' => $faker->unique()->userName,
        'server_id' => '1',
        'role_id' => random_int(1,5),
        'league_id' => random_int(1,7),
        'price' => random_int(50,120),
        'img' => $faker->imageUrl($width = 640, $height = 480),
        'about' => $faker->paragraph,
        'type_id' => random_int(1,2),
    ];
});
