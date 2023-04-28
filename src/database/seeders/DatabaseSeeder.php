<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
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
        AdminUser::factory(1)->create([
            "name" => "Admin2",
            "email" => "laravel2@laravel.com",
            "password" => bcrypt("12345"),
        ]);

        User::factory(10)->create();

        Post::factory(10)->create();
    }
}
