<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" />

    </head>
    <body>

        <div class="border-t-8 border-blue-500 p-32">
            <div class="max-w-4xl mx-auto prose xl:prose-xl">

                <h1>Welcome to my blog</h1>
                <p class="mb-20">Lots of great stuff to read.</p>

                @foreach ($posts as $post)
                    <h2>{{ $post->title }}</h2>
                @endforeach

            </div>
        </div>

    </body>
</html>
