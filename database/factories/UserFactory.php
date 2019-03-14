<?php

use App\Profile;
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'current_address'=>$faker->address,
        'birth_location'=>$faker->address,
        'date_of_birth'=>$faker->dateTimeAD,
        'bio'=>$faker->paragraph,
        'gender'=>'male',
        'academic_level'=>'Graduate',
        'caste'=>'Brahman',
        'marital_status' => 'single',
        'employed'=>$faker->boolean
    ];
});

$factory->state(Profile::class, 'male', function(Faker $faker) {
    return [
        'gender' => 'male'
    ];
});

$factory->state(Profile::class, 'female', function(Faker $faker) {
    return [
      'gender' => 'female'
    ];
});

$factory->state(Profile::class, 'employment', function(Faker $faker) {
    return [
        'employed' => true,
    ];
});

$factory->state(Profile::class, 'newar', function(Faker $faker) {
    return [
        'caste' => 'Newar',
    ];
});

$factory->state(Profile::class, 'chhetri', function(Faker $faker) {
    return [
        'caste' => 'Chhetri',
    ];
});

$factory->state(Profile::class, 'magar', function(Faker $faker) {
    return [
        'caste' => 'Magar',
    ];
});

$factory->state(Profile::class, 'others', function(Faker $faker) {
    return [
        'caste' => 'Others',
    ];
});
