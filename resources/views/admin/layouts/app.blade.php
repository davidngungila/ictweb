<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard — FeedTan Community Microfinance Group')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/regular/style.css">
    @stack('styles')
</head>
<body class="antialiased">
    @yield('content')
    
    <script src="https://unpkg.com/@phosphor-icons/web@2.0.3"></script>
    @stack('scripts')
</body>
</html>
