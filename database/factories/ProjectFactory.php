<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'photo'=>$faker->imageUrl(200,200),
        'decreption' => $faker->paragraph(2),
        'service_id'=>$faker->numberBetween(1,6)
    ];
});
