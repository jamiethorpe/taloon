<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="antialiased font-sans bg-gray-50 text-gray-800">
    {{ $slot }}
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</body>
</html>
