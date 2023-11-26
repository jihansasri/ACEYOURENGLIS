<?php

namespace Database\Seeders;

use App\Models\CourseDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courseDetails = [
            [
                'course_id' => 1,
                'title' => 'Parts of Speech',
                'description' => '<p><strong>1. Nouns</strong><br />
                - Nouns are words that represent people, places, things, or ideas.<br />
                - They can be classified into common nouns (e.g., dog, city) and proper nouns (e.g., Fido, Paris).<br />
                <strong>2. Pronouns</strong><br />
                - Pronouns replace nouns to avoid repetition.<br />
                - Common pronouns include he, she, it, they, and we.<br />
                <strong>3. Verbs</strong><br />
                - Verbs are action words.<br />
                - They can be divided into action verbs (e.g., run, eat) and linking verbs (e.g., is, am, seem).<br />
                <strong>4. Adjectives</strong><br />
                - Adjectives describe or modify nouns.<br />
                - They add details and characteristics to the noun.<br />
                - Examples: beautiful, tall, blue.<br />
                <strong>5. Adverbs</strong><br />
                - Adverbs modify verbs, adjectives, or other adverbs.<br />
                - They answer questions like how, when, and where.<br />
                - Examples: quickly, very, there.<br />
                <strong>6. Prepositions</strong><br />
                - Prepositions show the relationship between nouns or pronouns and other words in a sentence.<br />
                - Examples: in, on, under, between.<br />
                <strong>7. Conjunctions</strong><br />
                - Conjunctions connect words, phrases, or clauses.<br />
                - Common conjunctions include and, but, or, and yet.<br />
                <strong>8. Interjections</strong><br />
                - Interjections are short exclamations that express strong emotions.<br />
                - Examples: Oh! Wow! Ouch!</p>'
            ],
            [
                'course_id' => 1,
                'title' => 'Sentence Structure',
                'description' => '<p><strong>1. Subject and Predicate</strong><br />
                A sentence is composed of a subject (who or what the sentence is about) and a predicate (what the subject is doing or what is happening).<br />
                <strong>2. Types of Sentences</strong><br />
                Declarative sentences (statements), interrogative sentences (questions), imperative sentences (commands), and exclamatory sentences (expressing strong emotions).<br />
                <strong>3. Sentence Fragments</strong><br />
                Incomplete sentences that lack a subject, predicate, or both.</p>
                '
            ],
            [
                'course_id' => 1,
                'title' => 'Tenses',
                'description' => '<p><strong>1. Present Tense</strong><br />
                - Used to describe actions happening now or regularly.<br />
                - Example: She sings.<br />
                <strong>2. Past Tense</strong>2<br />
                - Used to describe actions that happened in the past.<br />
                - Example: They visited last year.<br />
                <strong>3. Future Tense</strong><br />
                - Used to describe actions that will happen in the future.<br />
                - Example: We will travel tomorrow.</p>
                '
            ],
            [
                'course_id' => 1,
                'title' => 'Common Grammar Rules',
                'description' => '<p><strong>1. Subject-Verb Agreement</strong><br />
                - The subject and verb in a sentence must agree in number (singular or plural).<br />
                - Example: The cat (singular) runs. The cats (plural) run.<br />
                <strong>2. Use of Articles</strong><br />
                - &quot;A,&quot; &quot;an,&quot; and &quot;the&quot; are articles used before nouns.<br />
                - &quot;A&quot; and &quot;an&quot; are indefinite articles, while &quot;the&quot; is the definite article.<br />
                <strong>3. Proper Punctuation</strong><br />
                Proper use of periods, commas, apostrophes, and other punctuation marks is crucial for clear communication.</p>
                '
            ],
            [
                'course_id' => 1,
                'title' => 'Conclusion',
                'description' => '<p>Understanding English grammar is essential for effective communication. By mastering the basics of parts of speech, sentence structure, tenses, and common grammar rules, you&#39;ll be well-equipped to express yourself clearly and confidently in English. Practice and consistent application of these concepts are the keys to improving your language skills.</p>
                '
            ],
            [
                'course_id' => 2,
                'title' => 'The Evolution of Slang',
                'description' => '<p>Slang words are not static; they continually evolve, reflecting changes in society, technology, and pop culture. What was once considered slang in the past may become mainstream language over time. The rise of the internet and social media has accelerated this process, with slang spreading globally at unprecedented speeds. For example, terms like &quot;selfie,&quot; &quot;meme,&quot; and &quot;YOLO&quot; originated as slang but are now widely accepted in formal language.</p>
                '
            ],
            [
                'course_id' => 2,
                'title' => 'Impact on Language',
                'description' => '<p>Slang words have a profound impact on language, enriching it with creativity and adaptability. They serve several important functions:<br />
                1. Expressing Identity: Slang words often emerge within specific social groups or subcultures, helping individuals identify with their peers. For example, the use of &quot;lit&quot; or &quot;fam&quot; may indicate belonging to certain youth or online communities.<br />
                2. Keeping Language Fresh: Slang words inject freshness and novelty into language. They provide alternative expressions for concepts, making communication more engaging and expressive.<br />
                3. Reflecting Cultural Trends: Slang words mirror societal trends, reflecting changes in technology, fashion, and behavior. Terms like &quot;phubbing&quot; (ignoring someone in favor of your phone) are examples of how slang keeps pace with cultural shifts.<br />
                4. Fostering Inclusivity: Slang can be inclusive, allowing individuals to connect and communicate with others who understand their shared slang. This inclusivity strengthens bonds within communities.</p>
                '
            ],
            [
                'course_id' => 2,
                'title' => 'Cultural Significance',
                'description' => '<p>Slang words often hold cultural significance, encapsulating shared experiences, values, and humor. They can:<br />
                1. Preserve Cultural Heritage: Slang can preserve elements of a culture&#39;s history and traditions. For example, African American Vernacular English (AAVE) includes slang terms that reflect the African diaspora&#39;s influence on American culture.<br />
                2. Promote Innovation: Slang encourages linguistic innovation and creativity. It challenges established norms and fosters a sense of playfulness in language.<br />
                3. Reflect Subversion: Slang can also serve as a form of subversion, allowing marginalized groups to communicate in ways that challenge the dominant discourse.</p>
                '
            ],
            [
                'course_id' => 2,
                'title' => 'Challenges and Controversies',
                'description' => '<p>While slang words are vibrant and culturally significant, they can also pose challenges. They may lead to misunderstandings between generations or across cultural divides. Overreliance on slang in formal contexts can undermine clarity and professionalism. Additionally, some slang terms may perpetuate harmful stereotypes or exclusionary practices, necessitating a nuanced approach to their use.</p>
                '
            ],
            [
                'course_id' => 2,
                'title' => 'Conclusion',
                'description' => '<p><strong>Conclusion</strong><br />
                Slang words are linguistic gems that add flair, vitality, and cultural depth to our language. They reflect the ever-changing tapestry of society, adapt to new technologies, and offer a sense of belonging to various communities. As we navigate the dynamic world of slang, it is essential to appreciate their creative potential, recognize their cultural significance, and use them judiciously to enrich our communication while maintaining linguistic clarity and respect for diverse perspectives. Slang words are more than just words; they are windows into our evolving cultural landscape.</p>
                '
            ],
            [
                'course_id' => 3,
                'title' => 'The Role of Lyrics in a Song',
                'description' => '<p><strong>1. Conveying Emotion</strong><br />
                - Lyrics serve as a channel for artists to express emotions, whether love, joy, sadness, or anger.<br />
                - They help create a deep connection between the artist and the audience.<br />
                <strong>2. Telling a Story</strong><br />
                - Many songs tell a narrative or share personal experiences.<br />
                - Through lyrics, listeners can relate to the stories being told.<br />
                <strong>3. Conveying a Message</strong><br />
                - Lyrics can convey social, political, or cultural messages.<br />
                - They often serve as a medium for artists to raise awareness and provoke thought.</p>
                '
            ],
            [
                'course_id' => 3,
                'title' => 'The Art of Writing Lyrics',
                'description' => '<p><strong>1. Themes and Topics</strong><br />
                Songwriters choose themes and topics based on their experiences, interests, and the message they want to convey.<br />
                <strong>2. Rhyme and Meter</strong><br />
                - Rhyme schemes and meter are critical in creating a song&#39;s structure and rhythm.<br />
                - These elements help songs flow smoothly and maintain the listener&#39;s interest.<br />
                <strong>3. Figurative Language</strong><br />
                - Song lyrics often use metaphors, similes, and other forms of figurative language to create vivid and imaginative imagery.</p>
                '
            ],
            [
                'course_id' => 3,
                'title' => 'Types of Lyrics',
                'description' => '<p><strong>1. Love Songs</strong><br />
                Love songs explore various facets of romantic relationships, from joy to heartbreak.<br />
                <strong>2. Protest and Social Commentary</strong><br />
                These lyrics address social or political issues, advocating for change.<br />
                <strong>3. Storytelling Songs</strong><br />
                These songs narrate a story, providing details and character development.</p>
                '
            ],
            [
                'course_id' => 3,
                'title' => 'The Impact of Song Lyrics',
                'description' => '<p><strong>1. Cultural Significance</strong><br />
                Many songs and their lyrics become cultural touchstones, reflecting the times in which they were written.<br />
                <strong>2. Emotional Connection</strong><br />
                Lyrics have the power to evoke strong emotions and resonate with listeners on a personal level.<br />
                <strong>3. Influence on Language and Culture</strong><br />
                Iconic song lyrics can influence language, culture, and fashion trends.</p>
                '
            ],
            [
                'course_id' => 3,
                'title' => 'Conclusion',
                'description' => '<p>Song lyrics are more than just words set to music; they are a form of art that can deeply touch, inspire, and connect with listeners. By exploring various types of song lyrics and understanding the role they play in music and culture, we gain insight into the power of language and its ability to shape and reflect our experiences and emotions.</p>
                '
            ],
        ];

        CourseDetail::insert($courseDetails);
    }
}
