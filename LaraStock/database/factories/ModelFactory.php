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


//fabricar dados , primeiro parametro é um model 

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
	'name'	=>  $faker -> sentence(2) ,  // produto tem até duas palavras
	'description' => $faker->sentence(10) ,
	'price_cost' => $faker-> numberBetween(1,50),
	'price_resale' => $faker-> numberBetween(4,120),
	'category_id' => ,
	//'brand_id'=> 1,
	//'provider_id'=> 1,
    ];
});
