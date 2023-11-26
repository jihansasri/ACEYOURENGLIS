<?php

namespace Database\Seeders;

use App\Models\Choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $choices = [
            [
                'question_id' => 1,
                'choice' => 'reads',
                'is_correct' => true
            ],
            [
                'question_id' => 1,
                'choice' => 'is reading',
                'is_correct' => false
            ],
            [
                'question_id' => 1,
                'choice' => 'read',
                'is_correct' => false
            ],
            [
                'question_id' => 1,
                'choice' => 'will read',
                'is_correct' => false
            ],
            [
                'question_id' => 2,
                'choice' => "I doesn't like ice cream.",
                'is_correct' => false
            ],
            [
                'question_id' => 2,
                'choice' => 'She do her homework every day.',
                'is_correct' => false
            ],
            [
                'question_id' => 2,
                'choice' => 'He does his homework.',
                'is_correct' => true
            ],
            [
                'question_id' => 2,
                'choice' => 'They done their chores.',
                'is_correct' => false
            ],
            [
                'question_id' => 3,
                'choice' => 'She go to the store yesterday.',
                'is_correct' => false
            ],
            [
                'question_id' => 3,
                'choice' => 'He eated lunch at 1 PM.',
                'is_correct' => false
            ],
            [
                'question_id' => 3,
                'choice' => 'They played soccer after school.',
                'is_correct' => true
            ],
            [
                'question_id' => 3,
                'choice' => 'I is writing a letter now.',
                'is_correct' => false
            ],
            [
                'question_id' => 4,
                'choice' => 'Big Friendly Friend',
                'is_correct' => false
            ],
            [
                'question_id' => 4,
                'choice' => 'Best Friends Forever',
                'is_correct' => true
            ],
            [
                'question_id' => 4,
                'choice' => 'Busy Fast Food',
                'is_correct' => false
            ],
            [
                'question_id' => 4,
                'choice' => 'Basic Food for Fun',
                'is_correct' => false
            ],
            [
                'question_id' => 5,
                'choice' => 'Cash',
                'is_correct' => false
            ],
            [
                'question_id' => 5,
                'choice' => 'Currency',
                'is_correct' => false
            ],
            [
                'question_id' => 5,
                'choice' => 'Dollar',
                'is_correct' => false
            ],
            [
                'question_id' => 5,
                'choice' => 'Moolah',
                'is_correct' => true
            ],
            [
                'question_id' => 6,
                'choice' => 'Extremely cold',
                'is_correct' => false
            ],
            [
                'question_id' => 6,
                'choice' => 'To relax or take it easy',
                'is_correct' => true
            ],
            [
                'question_id' => 6,
                'choice' => 'A spicy food',
                'is_correct' => false
            ],
            [
                'question_id' => 6,
                'choice' => 'To be nervous',
                'is_correct' => false
            ],
            [
                'question_id' => 7,
                'choice' => 'Declarative Sentence',
                'is_correct' => false
            ],
            [
                'question_id' => 7,
                'choice' => 'Imperative Sentence',
                'is_correct' => false
            ],
            [
                'question_id' => 7,
                'choice' => 'Interrogative Sentence',
                'is_correct' => true
            ],
            [
                'question_id' => 7,
                'choice' => 'Exclamatory Sentence',
                'is_correct' => false
            ],
            [
                'question_id' => 8,
                'choice' => 'He have a new car.',
                'is_correct' => false
            ],
            [
                'question_id' => 8,
                'choice' => 'I am liking this movie.',
                'is_correct' => false
            ],
            [
                'question_id' => 8,
                'choice' => 'They was playing outside.',
                'is_correct' => false
            ],
            [
                'question_id' => 8,
                'choice' => 'She sings beautifully.',
                'is_correct' => true
            ],
            [
                'question_id' => 9,
                'choice' => 'She smiling at me.',
                'is_correct' => false
            ],
            [
                'question_id' => 9,
                'choice' => 'Me at she smiling.',
                'is_correct' => false
            ],
            [
                'question_id' => 9,
                'choice' => 'Smiling at me she.',
                'is_correct' => false
            ],
            [
                'question_id' => 9,
                'choice' => 'She at me smiling.',
                'is_correct' => true
            ],
            [
                'question_id' => 10,
                'choice' => "The lead singer's part",
                'is_correct' => false
            ],
            [
                'question_id' => 10,
                'choice' => 'The chorus that repeats throughout the song',
                'is_correct' => true
            ],
            [
                'question_id' => 10,
                'choice' => 'A sudden tempo change',
                'is_correct' => false
            ],
            [
                'question_id' => 10,
                'choice' => 'The final verse',
                'is_correct' => false
            ],
            [
                'question_id' => 11,
                'choice' => 'Simile',
                'is_correct' => false
            ],
            [
                'question_id' => 11,
                'choice' => 'Metaphor',
                'is_correct' => false
            ],
            [
                'question_id' => 11,
                'choice' => 'Dollar',
                'is_correct' => false
            ],
            [
                'question_id' => 11,
                'choice' => 'Anaphora',
                'is_correct' => true
            ],
            [
                'question_id' => 12,
                'choice' => 'Chorus',
                'is_correct' => false
            ],
            [
                'question_id' => 12,
                'choice' => 'Melody',
                'is_correct' => false
            ],
            [
                'question_id' => 12,
                'choice' => 'Harmony',
                'is_correct' => false
            ],
            [
                'question_id' => 12,
                'choice' => 'Lyric',
                'is_correct' => true
            ],
            [
                'question_id' => 13,
                'choice' => 'Noun',
                'is_correct' => false
            ],
            [
                'question_id' => 13,
                'choice' => 'Verb',
                'is_correct' => false
            ],
            [
                'question_id' => 13,
                'choice' => 'Adjective',
                'is_correct' => true
            ],
            [
                'question_id' => 13,
                'choice' => 'Adverb',
                'is_correct' => false
            ],
            [
                'question_id' => 14,
                'choice' => 'Noun',
                'is_correct' => false
            ],
            [
                'question_id' => 14,
                'choice' => 'Verb',
                'is_correct' => false
            ],
            [
                'question_id' => 14,
                'choice' => 'Adjective',
                'is_correct' => false
            ],
            [
                'question_id' => 14,
                'choice' => 'Conjunction',
                'is_correct' => true
            ],
            [
                'question_id' => 15,
                'choice' => 'Noun',
                'is_correct' => false
            ],
            [
                'question_id' => 15,
                'choice' => 'Verb',
                'is_correct' => true
            ],
            [
                'question_id' => 15,
                'choice' => 'Adverb',
                'is_correct' => false
            ],
            [
                'question_id' => 15,
                'choice' => 'Conjunction',
                'is_correct' => false
            ],
            [
                'question_id' => 16,
                'choice' => "A compliment to someone's fashion sense",
                'is_correct' => false
            ],
            [
                'question_id' => 16,
                'choice' => 'A tiny and insignificant detail',
                'is_correct' => false
            ],
            [
                'question_id' => 16,
                'choice' => 'A state of confusion or bewilderment',
                'is_correct' => false
            ],
            [
                'question_id' => 16,
                'choice' => 'A term used to describe something excellent or outstanding',
                'is_correct' => true
            ],
            [
                'question_id' => 17,
                'choice' => 'A style of dance popular at the time',
                'is_correct' => false
            ],
            [
                'question_id' => 17,
                'choice' => 'A young woman known for her unconventional behavior and fashion',
                'is_correct' => true
            ],
            [
                'question_id' => 17,
                'choice' => 'A type of car that was popular among young people',
                'is_correct' => false
            ],
            [
                'question_id' => 17,
                'choice' => 'A type of alcoholic beverage often consumed during Prohibition',
                'is_correct' => false
            ],
            [
                'question_id' => 18,
                'choice' => 'A luxurious and fashionable item of clothing',
                'is_correct' => true
            ],
            [
                'question_id' => 18,
                'choice' => 'A type of slang used by jazz musicians',
                'is_correct' => false
            ],
            [
                'question_id' => 18,
                'choice' => 'A term for something unimpressive or ordinary',
                'is_correct' => false
            ],
            [
                'question_id' => 18,
                'choice' => 'A nickname for a popular dance club in the 1920s',
                'is_correct' => false
            ],
        ];

        Choice::insert($choices);
    }
}