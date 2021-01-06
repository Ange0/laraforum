<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('extra-js')
    <title>Topic</title>
</head>
<body>
    <nav>
        <li><a href="{{ route('topics.index') }}">Home</a></li>
        <li><a href="{{ route('topics.create') }}">Creer un topic</a></li>
    </nav>
    @yield('content')
</body>
</html>