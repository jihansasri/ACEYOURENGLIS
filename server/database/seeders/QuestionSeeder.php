<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'quiz_id' => 1,
                'question' => '<p>Complete the sentence with the correct verb tense:</p>
                <p>&quot;She ____ (to read) a book yesterday.&quot;</p>
                '
            ],
            [
                'quiz_id' => 1,
                'question' => '<p>Which sentence uses the correct form of the verb &quot;to do&quot;?</p>
                '
            ],
            [
                'quiz_id' => 1,
                'question' => '<p>Choose the sentence with the correct past tense verb.</p>
                '
            ],
            [
                'quiz_id' => 2,
                'question' => '<p>What does the slang term &quot;bff&quot; stand for?</p>
                '
            ],
            [
                'quiz_id' => 2,
                'question' => '<p>Which of the following is an example of a slang word for money?</p>
                '
            ],
            [
                'quiz_id' => 2,
                'question' => '<p>What does the slang term &quot;chill&quot; mean?</p>
                '
            ],
            [
                'quiz_id' => 3,
                'question' => '<p>Identify the sentence type in the following sentence:</p>
                <p>&quot;Are you coming to the party?&quot;</p>
                '
            ],
            [
                'quiz_id' => 3,
                'question' => '<p>Choose the sentence with correct grammar:</p>
                '
            ],
            [
                'quiz_id' => 3,
                'question' => '<p>Choose the correct sentence structure for the given words:</p>
                <p>&quot;at / she / smiling / me&quot;</p>
                '
            ],
            [
                'quiz_id' => 4,
                'question' => '<p>In song lyrics, what does the term &quot;refrain&quot; typically refer to?</p>
                '
            ],
            [
                'quiz_id' => 4,
                'question' => '<p>Which term describes the repetition of a word or phrase at the end of consecutive lines in a song&#39;s lyrics for emphasis or artistic effect?</p>
                '
            ],
            [
                'quiz_id' => 4,
                'question' => '<p>Which of the following words refers to the main theme or message in a song&#39;s lyrics?</p>
                '
            ],
            [
                'quiz_id' => 5,
                'question' => '<p>Select the correct part of speech for the word in quotes:</p>
                <p>My sister&#39;s birthday is &quot;next&quot; week.</p>
                '
            ],
            [
                'quiz_id' => 5,
                'question' => '<p>Identify the part of speech of the underlined word:</p>
                <p>I love to read, and I also enjoy writing.</p>
                '
            ],
            [
                'quiz_id' => 5,
                'question' => '<p>Identify the part of speech of the underlined word:</p>
                <p>&quot;The cat chased the mouse across the room.&quot;</p>
                '
            ],
            [
                'quiz_id' => 6,
                'question' => '<p>Historical Slang Term: &quot;Bee&#39;s Knees&quot;</p>
                <p>What does the slang term &quot;Bee&#39;s Knees&quot; mean in historical slang?</p>
                '
            ],
            [
                'quiz_id' => 6,
                'question' => '<p>Historical Slang Term: &quot;Flapper&quot;</p>
                <p>In the 1920s, what did the slang term &quot;Flapper&quot; refer to?</p>
                '
            ],
            [
                'quiz_id' => 6,
                'question' => '<p>Historical Slang Term: &quot;Cat&#39;s Pajamas&quot;</p>
                <p>What does the historical slang term &quot;Cat&#39;s Pajamas&quot; mean?</p>
                '
            ],
        ];

        Question::insert($questions);
    }
}