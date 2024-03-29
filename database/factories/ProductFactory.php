<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $path = storage_path('app/public/product'); //Atención con la ruta a la carpeta.

  $categories = ["pastas","carnes","postres", "pescados"];

  return [
    'name' => $faker->sentence(3),
    'category' => $categories[rand(0,3)],
    'description' => $faker->sentence(20),
    'price'=>$faker->randomFloat(2, 300, 4000),
    'image'=> $faker->image($path, 480, 600,'food', false), //documentación de faker.
  ];
});
