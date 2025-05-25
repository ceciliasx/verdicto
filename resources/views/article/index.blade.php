<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verdicto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400..700;1,400..700&family=Inter:wght@100..900&family=Nunito+Sans:opsz,wght@6..12,500&family=Poppins:wght@300&display=swap" rel="stylesheet"></head>

    @vite('resources/css/app.css') {{-- Make sure your app uses Vite for styles --}}
</head>
<body class="bg-customBlue text-white min-h-screen flex items-center justify-center">

    <div class="text-center space-y-6">
        <img src="{{ asset('assets/logo_blue.png') }}" alt="Logo" class="mx-auto w-auto h-auto">

        <div class="space-x-4">
            <a href="{{ route('login') }}" class="inline-block px-6 py-3 bg-customWhite hover:bg-customYellow rounded-lg text-customBlue hover:text-customWhite rounded-lg font-semibold transition ease-in-out duration-120">
                Login
            </a>
            <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-customWhite hover:bg-customYellow rounded-lg text-customBlue hover:text-customWhite rounded-lg font-semibold transition ease-in-out duration-120">
                Register
            </a>
        </div>
    </div>

</body>
</html>
