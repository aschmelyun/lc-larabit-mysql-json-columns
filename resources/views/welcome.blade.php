<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 text-gray-900">
            <div class="max-w-3xl mx-auto">
                @foreach($users as $user)
                    <div class="border border-gray-300 rounded py-4 px-8 mb-4">
                        <h2 class="font-semibold text-xl text-gray-900">
                            {{ $user->name }} (<span class="text-gray-500">{{ $user->email }}</span>)
                        </h2>
                        <ul>
                            <li><span class="font-bold">Phone Number: </span>{{ $user->settings['phone'] }}</li>
                            <li><span class="font-bold">City: </span>{{ $user->settings['address']['city'] }}</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
