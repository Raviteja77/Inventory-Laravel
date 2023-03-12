

<!DOCTYPE html>
<html>
    <head>
        <title>Owners List</title>
        <style>
            .menu {
                background-color: #333;
                color: #fff;
                padding: 1rem;
                display: flex;
                justify-content: end;
            }

            .menu ul {
                margin: 0;
                padding: 0;
                list-style-type: none;
            }

            .menu li {
                display: inline-block;
                margin-right: 2rem;
            }

            .menu li:last-child {
                margin-right: 0;
            }

            .menu a {
                color: #fff;
                text-decoration: none;
            }

            .menu a:hover {
                text-decoration: underline;
            }

        </style>
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('asset.index') }}">Assets</a></li>
                <li><a href="{{ route('person.index') }}">People</a></li>
                <li><a href="{{ route('owner.index') }}">Ownership</a></li>
                @auth
                <li><form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                </form></li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </nav>
    </body>
</html>