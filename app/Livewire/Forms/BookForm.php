<?php

namespace App\Livewire\Forms;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Form;

class BookForm extends Form
{
    public ?Book $book;

    #[Rule('required', message: ':attribute is required', as: 'Title of the book')]
    #[Rule('min:5')]
    public string $title = '';

    #[Rule('required', message: ':attribute is required', as: 'Author of the book')]
    #[Rule('min:5')]
    public string $author = '';

    public function setBook(Book $book)
    {
        $this->book = $book;

        $this->fill(
            $book->only('title', 'author')
        );
    }

    public function update()
    {
        $this->book->update(
            $this->only('title', 'author')
        );

        $this->reset();
    }

    public function create()
    {
        $book = auth()->user()->books()->create(
            $this->only('title', 'author')
        );

        $this->reset();

        return $book;
    }
}
