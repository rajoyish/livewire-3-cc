<div class="space-y-2">
    @foreach ($books as $book)
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class="text-lg font-bold leading-snug">{{ $book->title }}</h2>
                <p>by {{ $book->author }}</p> 
                <p class="mt-4">{{ $book->notes }}</p>
            </div>
        </div>
    @endforeach
</div>
