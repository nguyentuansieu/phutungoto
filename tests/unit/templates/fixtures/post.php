<?php

$faker = Faker\Factory::create();

return [
    'category_id' => $faker->numberBetween(16,19),
    'title' => $faker->sentence(10,true),
    'slug' => $faker->slug,
    'image' => '/uploads/'.$faker->image($dir = 'frontend/web/uploads', $width = 800, $height = 600, $category = null, $fullPath = false),
    'content' => $faker->sentence(500,true),
    'status' => 10,
    'created_at' => $faker->unixTime('now'),
    'updated_at' => $faker->unixTime('now'),
];
