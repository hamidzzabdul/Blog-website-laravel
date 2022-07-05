<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BlogPostTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if ($this->command->confirm('Do you want to refresh the database')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database was refreshed');
        };

        $this->call([
            UserTableSeeder::class,
            BlogPostTableSeeder::class,
        ]);
    }
}
