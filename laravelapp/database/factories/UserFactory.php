<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
$factory->define(User::class, function (Faker $faker){
    return[
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'email_verified_at' => now(),
    'Password' => '',
    'remember_token' => Str::random(10),
    ];

});

$factory->define(Person::class, function (Faker $faker){
    return[
        'name'=> $faker->name,
        'mail'=>$faker->safeEmail,
        'age' => random_int(1,99),
    ];
});
