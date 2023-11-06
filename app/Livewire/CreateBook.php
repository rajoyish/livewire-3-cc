<?php

namespace App\Livewire;

use App\Livewire\Forms\BookForm;
use Livewire\Component;

class CreateBook extends Component
{
    public BookForm $form;

    public function submit()
    {
        $this->form->validate();

        // sleep(3); // artificial  3 seconds loading time before accessing data

        $book = $this->form->create();
        // dd($book);

        // $this->dispatch('book.created', $book->id);
        $this->dispatch('book.created');

        $this->dispatch('alert', [
            'body' => 'The Book "'.$book->title.'" was created.',
        ]);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
