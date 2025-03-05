<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Database\Factories\CategoryFactory;

//use Illuminate\Support\Str;
class CategoryBlabla extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = new CategoryFactory();

        for ($i = 0; $i < 100; $i++) {
            for ($i = 0; $i < 100; $i++) {
                DB::table('categorie')->insert($factory->definition());
            }
        }
    }
}
