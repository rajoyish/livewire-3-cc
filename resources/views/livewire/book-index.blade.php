<div class="space-y-4">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 space-y-2"> 
            <div class="relative flex-auto">
                <x-input-label for="query" class="sr-only"> Search</x-input-label>
                <x-text-input wire:model.live.debounce.300ms="query" type="search" id="query" class="w-full pl-10"
                    placeholder="Search your books" />
                <span class="absolute inset-y-0 left-0 grid place-items-center ml-2"><x-search-icon /></span>
            </div>
        </div>
    </div>
    <div class="space-y-4">
        @if ($books->count())
            <div class="space-y-2" id="books">
                @foreach ($books as $book)
                    <livewire:book-item :book="$book" wire:key="{{ $book }}" />
                @endforeach
            </div>
            {{ $books->links(data: ['scrollTo' => '#books']) }}
        @endif
    </div>
</div>
