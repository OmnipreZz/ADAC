<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Klint",
            'email' => 'klint@klint.com',
            'role_id' => 1,
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "LeDoc",
            'email' => 'ledoc@ledoc.com',
            'role_id' => 1,
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "Omni",
            'email' => 'omni@omni.com',
            'role_id' => 1,
            'password' => bcrypt('secret'),
        ]);
    }
}
