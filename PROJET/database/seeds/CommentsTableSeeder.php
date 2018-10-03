<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'author' => "Klint",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 1,
            'post_id' => 12,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Klint",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 1,
            'post_id' => 11,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Klint",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 1,
            'post_id' => 10,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Klint",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 1,
            'post_id' => 9,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "LeDoc",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 2,
            'post_id' => 1,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "LeDoc",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 2,
            'post_id' => 2,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "LeDoc",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 2,
            'post_id' => 3,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "LeDoc",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 2,
            'post_id' => 4,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Omni",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 3,
            'post_id' => 5,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Omni",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 3,
            'post_id' => 6,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Omni",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 3,
            'post_id' => 7,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('comments')->insert([
            'author' => "Omni",
            'content' => "Ceci est le commentaire du post." ,
            'user_id' => 3,
            'post_id' => 8,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);
    }
}
