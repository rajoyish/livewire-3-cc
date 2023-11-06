<div x-data="{ body: null }"
    x-on:alert.window="
    body = $event.detail[0].body 
    setTimeout(() => {
    body = null
    }, 3000)
"
    x-show="body" class="p-4 mb-4 text-sm text-green-100 rounded-lg bg-green-500 absolute top-0 right-0" role="alert">
    <span x-text="body" class="font-medium"></span>
</div>
