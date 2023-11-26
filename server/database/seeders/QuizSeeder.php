<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzes = [
            [
                'course_id' => 1,
                'name' => 'Verb Tenses',
                'description' => 'You will explore various verb tenses in English. Learn how and when these tenses are used in sentences.',
                'image' => 'events-1.jpg'
            ],
            [
                'course_id' => 2,
                'name' => 'Everyday Slang',
                'description' => 'Challenge your knowledge of everyday slang expressions used in daily conversations.',
                'image' => 'events-2.jpg'
            ],
            [
                'course_id' => 1,
                'name' => 'Sentence Structure',
                'description' => 'Test your grasp of English sentence fundamentals. Explore subjects, predicates, objects, phrases, clauses, and prepositions to assess your understanding.',
                'image' => 'events-1.jpg'
            ],
            [
                'course_id' => 3,
                'name' => 'Song Vocabulary',
                'description' => 'Expand your vocabulary by identifying words and phrases commonly found in song lyrics.',
                'image' => 'events-2.jpg'
            ],
            [
                'course_id' => 1,
                'name' => 'Parts of Speech',
                'description' => 'Test your knowledge of English grammar by identifying different parts of speech such as nouns, verbs, adjectives, and more.',
                'image' => 'events-2.jpg'
            ],
            [
                'course_id' => 2,
                'name' => 'Historical Slang',
                'description' => 'Explore slang words and expressions that were popular in different eras, providing insights into language evolution throughout history.',
                'image' => 'events-1.jpg'
            ]
        ];

        Quiz::insert($quizzes);
    }
}
