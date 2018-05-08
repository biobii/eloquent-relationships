<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(TagSeeder::class);
        factory(App\User::class, 5)->create();
        factory(App\Post::class, 20)->create();
    }
}
