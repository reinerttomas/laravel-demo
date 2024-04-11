<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->has(Note::factory()->count(100))
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
        ]);
    }
}
