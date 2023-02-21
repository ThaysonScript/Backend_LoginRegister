<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        @yield('content_header')
    </header>
    <main>
        @yield('content_main')
    </main>
    <footer>
        @yield('content_footer')
    </footer>
</body>
</html>