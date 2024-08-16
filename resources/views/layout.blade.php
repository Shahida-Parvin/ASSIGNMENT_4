<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Contact Management System</h1>
        <nav>
            <a href="{{ route('contacts.index') }}">Home</a>
            <a href="{{ route('contacts.create') }}">Create Contact</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Contact Management App</p>
    </footer>
</body>
</html>
