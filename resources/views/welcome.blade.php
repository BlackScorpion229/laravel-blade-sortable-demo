<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blade Sortable Demo - Testing Heroku</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="mx-auto container py-8 space-y-8">

    <h1 class="text-2xl text-indigo-500 font-medium">
        Laravel Blade Sortable Demos
    </h1>

    <div class="space-x-2">
        <a href="/public/examples/basic"
           class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            Basic
        </a>
        <a href="/public/examples/custom-component"
           class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            Custom Component
        </a>
        <a href="/public/examples/as-form-input"
           class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            As Form Input
        </a>
        <a href="/public/examples/livewire"
           class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            Livewire
        </a>
        <a href="/public/examples/customization"
           class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            Customization
        </a>
        <a href="/public/examples/drag-drop"
           class="bg-indigo-500 border rounded-lg p-2 text-white text-sm"
        >
            Drag and Drop
        </a>
    </div>

</div>

</body>
</html>
