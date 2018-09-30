<?php

use Faker\Generator as Faker;

$factory->define(App\Films::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->text(20),
        'description' => $faker->text(200),
        'release_date' => $faker->dateTime(),
        'rating' => $faker->numberBetween($min = 1, $max = 5) ,
        'ticket_price' => $faker->numberBetween(110,250),
        'country' =>$faker->country,
        'genres' => $faker->text(15),
        'photo' => $faker->imageUrl($width = 200, $height = 200)




        /*

         $table->string('name');
            $table->text('description');
            $table->date('release_date');
            $table->integer('rating');
            $table->integer('ticket_price');
            $table->string('country');
            $table->string('genres');
            $table->text('photo');

        */
    ];
});
