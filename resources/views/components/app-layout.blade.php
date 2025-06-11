<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Default Title')</title>
    <!-- Add your CSS and other head content here -->
</head>
<body>
    {{ $slot }}
    @if (isset($header))
        <header>
            {{ $header }}
        </header>
    @endif
</body>
</html>