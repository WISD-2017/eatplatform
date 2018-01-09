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
		'userable_id'=>0,
		'userable_type'=>null,
		
    ];
});


$factory->define(App\Firms::class,function(Faker\Generator $faker){
	return [
		'userable_id' => function(){
			return factory(App\User::class)->create()->id;
		},
		'firm' => $faker->company(),
		'address' => $faker->address(),
		'tel' =>$faker->phoneNumber(),
	];
});
$factory->define(App\Stores::class, function (Faker\Generator $faker){
	return [
	'firm_id' => function(){
			return factory(App\Store::class)->create()->id;
		},
		'title' => $faker->sentence(mt_rand(3, 10)),
		'introduction' => $faker->paragraphs(mt_rand(3, 6),true),
		'firm_id' => 0,
		'is_report' => $faker->numberBetween(0,5),
		'created_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
	];
});

$factory->define(App\Member::class,function(Faker\Generator $faker){
	return [
		'userable_id' => function(){
			return factory(App\User::class)->create()->id;
		},
		'gender' => $faker->numberBetween(0,1),
		
	];
});



$factory->define(App\Comment::class, function (Faker\Generator $faker){
	return [
		'store_id','member_id' => function(){
			return factory(App\User::class)->create()->id;
		},
		'content' => $faker->sentence(mt_rand(3, 10)),
		'is_report' => $faker->numberBetween(0,5),
		'created_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
	];
});