<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Student Records')</title>
</head>
<body>
    <header>
        <h1>Student Records</h1>
        <nav>
            <a href="{{ route('students.index') }}">All Students</a> |
            <a href="{{ route('students.create') }}">Add Student</a>
        </nav>
    </header>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>