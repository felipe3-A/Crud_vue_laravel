<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Contact::factory(30)->create();

        \App\Models\Contact::factory(30)->create([
            'first_name' => 'Test User',
            'last_name' => 'Test User',
            'email' => 'tecomst@example.',
            'phone' => 'Number',
            'address' => 'address',

        ]);
    }
}
