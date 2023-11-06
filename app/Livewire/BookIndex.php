<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\On;
use Livewire\Component;

class BookIndex extends Component
{
    // #[On('book.created')]
    // public function bookCreated(int $bookId)
    // {
    //    dd($bookId);
    // }

    protected $listeners = [
        'book.created' => '$refresh',
    ];

    public function deleteBook(int $bookId)
    {
        $book = Book::find($bookId);

        $book->delete($bookId);
    }

    public function render()
    {
        return view('livewire.book-index', [
            'books' => auth()->user()->books()->latest()->get(),
        ]);
    }
}
