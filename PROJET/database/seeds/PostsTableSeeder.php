<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Klint",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Klint",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 2,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Klint",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 3,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Klint",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 4,
            'user_id' => 1,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "LeDoc",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 1,
            'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "LeDoc",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 2,
            'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "LeDoc",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 3,
            'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "LeDoc",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 4,
            'user_id' => 2,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Omni",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 1,
            'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Omni",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 2,
            'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Omni",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 3,
            'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);

        DB::table('posts')->insert([
            'title' => "Post".rand(0,100),
            'author' => "Omni",
            'content' => "Quia sit aspernatur veniam facere natus qui. Ut est facere quia commodi voluptatibus doloribus id et. Qui sapiente tenetur sint et neque sapiente quia nihil. Praesentium amet qui deleniti minima cumque molestiae dolorem." ,
            'category_id' => 4,
            'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s",time()),
            'updated_at' => date("Y-m-d H:i:s",time())
        ]);
    }
}
