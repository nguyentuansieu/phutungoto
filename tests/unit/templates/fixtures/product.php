<?php

$faker = Faker\Factory::create();

return [
    'category_id' => $faker->numberBetween(3,15),
    'title' => $faker->sentence(8,true),
    'slug' => $faker->slug(),
    'sku' => $faker->ean8(),
    'image' => '/uploads/'.$faker->image($dir = 'frontend/web/uploads', $width = 800, $height = 600, $category = null, $fullPath = false),
    'summary' => $faker->sentence(10,true),
    'content' => $faker->sentence(200,true),
    'status' => 10,
    'created_at' => $faker->unixTime('now'),
    'updated_at' => $faker->unixTime('now'),
];
