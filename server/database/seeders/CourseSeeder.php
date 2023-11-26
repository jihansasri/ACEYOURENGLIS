<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'user_id' => 2,
                'name' => 'GRAMMAR',
                'description' => 'Grammar is the set of rules and structures that govern how words are used in a language to form sentences and convey meaning.',
                'introduction' => '<p>- Grammar is the set of rules and structures that govern how words are used in a language to form sentences and convey meaning.<br />
                - It&#39;s the framework that ensures our sentences are clear, logical, and convey the intended message.</p>
                
                ',
                'image' => 'course-1.png'
            ],
            [
                'user_id' => 3,
                'name' => 'SLANG WORDS',
                'description' => 'Slang words are informal expressions used within social groups, often reflecting current trends and humor.',
                'introduction' => '<p>Slang words, the colorful and dynamic vocabulary of informal language, play a significant role in our daily communication. They are the linguistic offspring of culture, creativity, and societal evolution. This essay explores the fascinating world of slang words, their evolution, impact on language, and cultural significance</p>
                ',
                'image' => 'course-2.png'
            ],
            [
                'user_id' => 4,
                'name' => 'SONG LYRICS',
                'description' => 'Song lyrics are the emotional and narrative heart of a song, conveying the songwriters message or story through carefully crafted words and melodies.',
                'introduction' => '<p>What Are Song Lyrics?<br />
                - Song lyrics are the words or text of a song that convey a message, story, emotion, or theme.<br />
                - They are an integral part of a song, often accompanied by music, creating a unique artistic expression.</p>
                ',
                'image' => 'course-3.png'
            ]
        ];

        Course::insert($courses);
    }
}
