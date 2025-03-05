<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $faker = Faker::create(); // Tạo instance Faker

        return [
            'parent_id' => $faker->numberBetween(0, 10),
            'lft' => $faker->randomNumber(),
            'rgt' => $faker->randomNumber(),
            'depth' => $faker->randomDigit(),
            'name' => $faker->word(),
            'slug' => Str::slug($faker->word()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
