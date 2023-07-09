<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Date A Live Movie: Mayuri Judgment',
            'poster' => 'image.png',
            'genre_id' => '1',
            'country' => 'Japan',
            'year' => 2015,
            'rating' => 7.3,
        ]);

        Movie::create([
            'title' => 'Your Name.',
            'poster' => 'image.png',
            'genre_id' => '2',
            'country' => 'Japan',
            'year' => 2016,
            'rating' => 8.8,
        ]);

        Movie::create([
            'title' => 'A Silent Voice',
            'poster' => 'image.png',
            'genre_id' => '3',
            'country' => 'Japan',
            'year' => 2017,
            'rating' => 8.9,
        ]);

        Movie::create([
            'title' => 'Tenki no Ko',
            'poster' => 'image.png',
            'genre_id' => '4',
            'country' => 'Japan',
            'year' => 2019,
            'rating' => 8.3,
        ]);

        Movie::create([
            'title' => 'Laid-Back Camp Movie',
            'poster' => 'image.png',
            'genre_id' => '5',
            'country' => 'Japan',
            'year' => 2022,
            'rating' => 8.5,
        ]);
    }
}
