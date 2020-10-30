<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'company' => $faker->company,
        'cif' => $faker->ssn,
    ];
});
