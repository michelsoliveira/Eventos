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

$factory->define(App\Uusuario::class, function (Faker $faker) {
    static $password;

    return [
        'nome' => $faker->name,
        'usuario' =>$faker->userName,
        'email' => $faker->unique()->safeEmail,
        'senha' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
