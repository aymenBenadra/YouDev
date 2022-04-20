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

<body class="max-w-screen-lg mx-auto h-screen font-['Inter']" lang="en">
    <x-navbar />
    <main>
        <div class="flex items-center justify-center min-h-[80vh]">
            @yield('main')
        </div>
    </main>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
