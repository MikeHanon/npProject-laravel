<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $images=[
        '/images/product/1.png',
        '/images/product/2.png',
        '/images/product/4.png',
        '/images/product/batiment.png',
        '/images/product/electricien.jpg',
        '/images/product/plombier.jgpg',
        '/images/product/12.png',
        '/images/product/11.png',
        '/images/product/pizza.jpg',
        '/images/product/spaghetti.jpg',
    ];
    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
        'user_id' => 2,
        'name'=> $faker->word,
        'url' => $faker->word,
        'description' => $faker->sentence($nbWords=6, $variableNbWords = true),
        'price' => $faker->numberBetween($min = 5, $max = 20),
        'content' =>$faker->realText($faker->numberBetween(10,20)),
        'image' => $faker->randomElement($array = $images),
    ];
});
