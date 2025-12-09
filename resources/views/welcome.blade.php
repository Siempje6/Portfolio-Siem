<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Siem</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Welkom bij mijn portfolio!</h1>
    <p>Bekijk mijn projecten en neem contact op.</p>

    <nav>
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        @endguest
        <a href="{{ route('contact.form') }}">Contact</a>
    </nav>
</body>
</html>
