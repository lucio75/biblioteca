<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Autori::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'cognome' => $faker->lastName
    ];
});

$factory->define(App\Models\Libri::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'descrizione' => $faker->lastName,
        'ISBN' => $faker->text(10),
        'autore_id'=>factory(App\Models\Autori::class)->create()->id
    ];
});
