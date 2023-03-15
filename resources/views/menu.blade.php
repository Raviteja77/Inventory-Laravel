<!DOCTYPE html>
<html>
    <head>
        <title>Owners List</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> <!-- Linking the CSS stylesheet -->
    </head>
    <body>
        <nav class="menu"> <!-- The navigation bar/menu container -->
            <ul>
                <li><a href="{{ route('asset.index') }}">Assets</a></li> <!-- Link to assets page -->
                <li><a href="{{ route('person.index') }}">People</a></li> <!-- Link to people page -->
                <li><a href="{{ route('owner.index') }}">Ownership</a></li> <!-- Link to ownership page -->
                @auth <!-- Check if user is authenticated -->
                <li><form method="POST" action="{{ route('logout') }}">
                        @csrf <!-- CSRF protection -->
                        <button class="logout">Logout</button> <!-- Logout button -->
                    </form></li>
                @else <!-- If user is not authenticated -->
                <li><a href="{{ route('login') }}">Login</a></li> <!-- Link to login page -->
                <li><a href="{{ route('register') }}">Register</a></li> <!-- Link to register page -->
                @endauth
            </ul>
        </nav>
    </body>
</html>