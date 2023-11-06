<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 space-y-2">
        @if ($editing)
            <livewire:update-book :book="$book" />
        @else
            <h2 class="text-lg font-bold leading-snug">{{ $book->title }}</h2>
            <p>by {{ $book->author }}</p>
            <p class="mt-4">{{ $book->notes }}</p>
        @endif

        <div>
            <x-input-label class="sr-only">Notes</x-input-label>
            <textarea wire:model.live="form.notes" id="notes" rows="4"
                class="border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                placeholder="Your notes for this book."></textarea>
        </div>

        <x-secondary-button wire:click="$toggle('editing')">Edit</x-secondary-button>

        {{-- <x-danger-button wire:click="$parent.deleteBook({{ $book->id }})">Delete</x-danger-button> --}}

        <x-danger-button x-data
            x-on:click=" 
            window.confirm('Are you sure?') 
            ? $wire.$parent.deleteBook({{ $book->id }}) 
            : '' ">
            Delete
        </x-danger-button>
    </div>
</div>
