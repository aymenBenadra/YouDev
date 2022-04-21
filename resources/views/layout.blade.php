<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouDev</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Poppins&display=swap"
        rel="stylesheet">
</head>

<body class="max-w-screen-lg mx-auto h-screen font-['Inter'] relative" lang="en">
    <x-navbar />
    <main>
        <div class="flex items-center justify-center min-h-[80vh]">
            @yield('main')
        </div>
    </main>
    <footer>
        <x-footer />
    </footer>
    @if (session()->has('message'))
        <div class="alert text-white bg-blue-600 shadow-lg fixed w-2/4 bottom-3 right-1/2 translate-x-1/2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session()->get('message') }}</span>
            </div>
            <div class="flex-none">
                <button class="btn btn-sm btn-ghost"
                    onclick="(event=>event.target.parentNode.parentNode.classList.add('hidden'))(event)">close</button>
            </div>
        </div>
    @endif
</body>

</html>
