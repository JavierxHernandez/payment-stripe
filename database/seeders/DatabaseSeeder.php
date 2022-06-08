<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'javier',
            'email' => 'javier@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ]);
        Storage::deleteDirectory('public/services');
        Storage::deleteDirectory('public/articles');
        Storage::makeDirectory('public/services');
        Storage::makeDirectory('public/articles');
        Service::factory(10)->create();
        Article::factory(10)->create();
    }
}
