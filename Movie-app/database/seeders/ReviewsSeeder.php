<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Date A Live Movie: Mayuri Judgment',
            'user' => 'Shido Itsuka',
            'rating' => 7.3,
            'review' => "The dates are funny, cute, charming, and represent each spirit's personality well.",
            'review_date' => '27 August 2015',
        ]);

        Review::create([
            'film' => 'Your Name.',
            'user' => 'Mitsuha Miyamizu',
            'rating' => 8.8,
            'review' => "As a masterpiece from Makoto Shinkai, Your Name (Kimi no Nawa) is a must watch. Even if you're not a weeaboo, there's nothing wrong with watching this film as a cinematic work.",
            'review_date' => '12 December 2016',
        ]);

        Review::create([
            'film' => 'A Silent Voice',
            'user' => 'Shoya Ishida',
            'rating' => 8.9,
            'review' => "A Silent Voice features a deaf-mute character, but it's not difficult for us to hear that what this anime is actually trying to convey is that communication is something we have to learn, because most of us can't communicate properly.",
            'review_date' => '8 May 2017',
        ]);

        Review::create([
            'film' => 'Tenki no Ko',
            'user' => 'Taki Tachibana',
            'rating' => 8.3,
            'review' => "Looks like i'm one of the first reviews here, I'll go in the history books, lol! Well, let me start by saying Tenki no Ko is a great continuation of the form that Shinkai's been in for the past decade starting with Garden of Words. The character designs, story, pacing, art, animation and sound are all top notch as to be expected.",
            'review_date' => '26 August 2019',
        ]);

        Review::create([
            'film' => 'Laid-Back Camp Movie',
            'user' => 'Nadeshiko Kagamihara',
            'rating' => 8.5,
            'review' => "Yuru Camp Movie was literally more than I expected from an anime film with its exactly two-hour runtime. It’s far longer than you might expect from a movie about some people who build a campground and deal with government regulations about archaeological digs.",
            'review_date' => '6 July 2022',
        ]);
    }
}