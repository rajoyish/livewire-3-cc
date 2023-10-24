<div class="space-y-2">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form wire:submit.prevent="submit" class="flex gap-4">
                <div class="flex-grow">
                    <label for="title" class="sr-only">Book Title </label>
                    <x-text-input id="title" wire:model="form.title" placeholder="Book Title" class="w-full" />
                </div>
                <div class="flex-grow">
                    <label for="author" class="sr-only">Author </label>
                    <x-text-input id="author" wire:model="form.author" placeholder="Author" class="w-full" />
                </div>
                <x-primary-button type="submit">Submit</x-primary-button>
            </form>
        </div>
    </div>
    <div class="space-y-2">
        @foreach ($books as $book)
            <livewire:book-item :book="$book" wire:key="{{ $book }}" />
        @endforeach
    </div>
</div>
