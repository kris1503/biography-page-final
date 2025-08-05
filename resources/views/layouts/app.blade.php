<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f8f8f8;
        }
        .container {
            background: white;
            padding: 30px;
            max-width: 800px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #2c3e50;
        }
        /* Optional: active nav link style */
        .nav-link.active {
            font-weight: bold;
            color: #3490dc;
        }
        nav {
            max-width: 800px;
            margin: 20px auto;
            display: flex;
            gap: 20px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
