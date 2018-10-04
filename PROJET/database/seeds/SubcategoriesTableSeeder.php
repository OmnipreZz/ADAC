<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            "name" => "Piano",
            "category_id" => 1,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Guitare",
            "category_id" => 1,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Violon",
            "category_id" => 1,
        ]);

        DB::table('subcategories')->insert([
            "name" => "React Table",
            "category_id" => 1,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Trad",
            "category_id" => 2,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Classique",
            "category_id" => 2,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Rock",
            "category_id" => 2,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Jazz",
            "category_id" => 2,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Réunion",
            "category_id" => 3,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Répétition",
            "category_id" => 3,
        ]);

        DB::table('subcategories')->insert([
            "name" => "Concert",
            "category_id" => 3,
        ]);
    }
}
