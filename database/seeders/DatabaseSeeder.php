<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        // Factory::factoryForModel(BlogPost::class)->create(100);
        BlogPost::factory()->count(100)->create();
    }
}
