<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];
    protected $genres = [
        [
            'no' => 1,
            'genre_name' => 'Action',
            'description' => 'Spectacular physical action; a narrative emphasis on fights, chases, and explosions; and a combination of state-of-the-art special effects and stunt-work.',
        ],
        [
            'no' => 2,
            'genre_name' => 'Romance',
            'description' => 'A central love story between characters.',
        ],
        [
            'no' => 3,
            'genre_name' => 'Drama',
            'description' => 'Features stories with high stakes and many conflicts.',
        ],
        [
            'no' => 4,
            'genre_name' => 'Fantasy',
            'description' => 'Imaginary and unrealistic elements.',
        ],
        [
            'no' => 5,
            'genre_name' => 'Comedy',
            'description' => 'A storytelling genre that uses laughter and humor in order to entertain and amuse.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
