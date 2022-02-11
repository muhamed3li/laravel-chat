<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Moderator;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(6)->create();
        $this->call([
          AdminSeeder::class,
          ModeratorSeeder::class,
          UserSeeder::class,
        ]);
    }
}
