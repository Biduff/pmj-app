<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Putera Menumbingjie Jaya - Logistics & Transportation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        /* Optional: a subtle text shadow for better readability on background images */
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body class="bg-gray-100" style="font-family: 'Roboto', sans-serif;">

    <x-header />
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <footer class="bg-blue-900 text-white">
        <div class="container mx-auto text-center p-6">
            <p>&copy; {{ date('Y') }} PT. Putera Menumbingjie Jaya. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
