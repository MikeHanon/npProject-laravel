<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $images=[
        './public/images/product/1.png',
        './public/images/product/2.png',
        './public/images/product/4.png',
        './public/images/product/batiment.png',
        './public/images/product/electricien.jpg',
        './public/images/product/plombier.jgpg',
        './public/images/product/12.png',
        './public/images/product/11.png',
        './public/images/product/pizza.jpg',
        './public/images/product/spaghetti.jpg',
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
