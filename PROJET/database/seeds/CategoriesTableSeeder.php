<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Instruments",
        ]);

        DB::table('categories')->insert([
            'name' => "Ateliers",
        ]);

        DB::table('categories')->insert([
            'name' => "Evénements",
        ]);

        DB::table('categories')->insert([
            'name' => "Form. musicale",
        ]);
    }
}
