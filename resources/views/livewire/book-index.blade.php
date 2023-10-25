<div class="space-y-2">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form wire:submit.prevent="submit">
                <div class="flex gap-4">
                    <div class="flex-grow">
                        <label for="title" class="sr-only">Book Title </label>
                        <x-text-input id="title" wire:model.blur="form.title" placeholder="Book Title" class="w-full" />
                        @error('form.title')
                            <x-input-error messages="{{ $message }}" class="mt-1" />
                        @enderror
                    </div>
                    <div class="flex-grow">
                        <label for="author" class="sr-only">Author </label>
                        <x-text-input id="author" wire:model.blur="form.author" placeholder="Author" class="w-full" />
                        @error('form.author')
                            <x-input-error  messages="{{ $message }}" class="mt-1" />
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <x-primary-button type="submit">Create a Book</x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <div class="space-y-2">
        @foreach ($books as $book)
            <livewire:book-item :book="$book" wire:key="{{ $book }}" />
        @endforeach
    </div>
</div>
