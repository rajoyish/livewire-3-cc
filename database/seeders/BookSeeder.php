<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'user_id' => 1,
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'notes' => 'A classic novel about racial injustice in a small Southern town.',
            ],
            [
                'user_id' => 1,
                'title' => '1984',
                'author' => 'George Orwell',
                'notes' => 'A dystopian novel depicting a totalitarian regime.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'notes' => 'A story of wealth, love, and the American Dream in the 1920s.',
            ],
            [
                'user_id' => 1,
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'notes' => 'A classic romance novel with a strong-willed heroine.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'notes' => 'A coming-of-age novel featuring a rebellious teenager.',
            ],
            [
                'user_id' => 1,
                'title' => 'To the Lighthouse',
                'author' => 'Virginia Woolf',
                'notes' => 'A modernist novel exploring the inner thoughts of characters.',
            ],
            [
                'user_id' => 1,
                'title' => 'Moby-Dick',
                'author' => 'Herman Melville',
                'notes' => 'An epic tale of obsession and revenge on the high seas.',
            ],
            [
                'user_id' => 1,
                'title' => 'Brave New World',
                'author' => 'Aldous Huxley',
                'notes' => 'A dystopian novel set in a future world of genetic engineering and conformity.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'notes' => 'An epic fantasy trilogy of Middle-earth.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Hitchhiker\'s Guide to the Galaxy',
                'author' => 'Douglas Adams',
                'notes' => 'A humorous and satirical science fiction series.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Shining',
                'author' => 'Stephen King',
                'notes' => 'A horror novel set in a haunted hotel.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'notes' => 'A classic adventure tale in the world of Middle-earth.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Road',
                'author' => 'Cormac McCarthy',
                'notes' => 'A post-apocalyptic journey of survival and despair.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Hunger Games',
                'author' => 'Suzanne Collins',
                'notes' => 'A dystopian series where children fight to the death in an arena.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Color Purple',
                'author' => 'Alice Walker',
                'notes' => 'A story of a young woman\'s struggle for self-identity.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'notes' => 'A philosophical novel about personal legends and destiny.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Old Man and the Sea',
                'author' => 'Ernest Hemingway',
                'notes' => 'A tale of an aging fisherman\'s epic battle with a giant marlin.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Grapes of Wrath',
                'author' => 'John Steinbeck',
                'notes' => 'A novel depicting the struggles of Dust Bowl migrants.',
            ],
            [
                'user_id' => 1,
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'notes' => 'A story of a future society where books are banned and burned.',
            ],
            [
                'user_id' => 1,
                'title' => 'The Diary of a Young Girl',
                'author' => 'Anne Frank',
                'notes' => 'The diary of a Jewish girl hiding from the Nazis during World War II.',
            ],
        ];

        Book::insert($books);
    }
}
