<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Spectacular physical action; a narrative emphasis on fights, chases, and explosions; and a combination of state-of-the-art special effects and stunt-work.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'A central love story between characters.',
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Features stories with high stakes and many conflicts.',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Imaginary and unrealistic elements.',
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'A storytelling genre that uses laughter and humor in order to entertain and amuse.',
        ]);
    }
}
