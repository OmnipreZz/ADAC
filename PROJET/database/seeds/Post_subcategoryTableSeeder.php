<?php

use Illuminate\Database\Seeder;

class Post_subcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_subcategory')->insert([
            'post_id' => 1,
            'subcategory_id' => 1
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 1,
            'subcategory_id' => 2
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 1,
            'subcategory_id' => 3
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 5,
            'subcategory_id' => 4
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 9,
            'subcategory_id' => 2
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 9,
            'subcategory_id' => 3
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 2,
            'subcategory_id' => 5
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 2,
            'subcategory_id' => 6
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 6,
            'subcategory_id' => 7
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 10,
            'subcategory_id' => 7
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 10,
            'subcategory_id' => 6
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 10,
            'subcategory_id' => 5
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 10,
            'subcategory_id' => 8
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 3,
            'subcategory_id' => 9
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 7,
            'subcategory_id' => 10
        ]);

        DB::table('post_subcategory')->insert([
            'post_id' => 11,
            'subcategory_id' => 11
        ]);
    }
}
