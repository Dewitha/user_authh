<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cuan Space')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <header class="mb-4">
            <h1 class="text-center">Cuan Space</h1>
        </header>
        <main>
            @yield('content')
        </main>
        <footer class="text-center mt-5">
            <p>&copy; 2025 Cuan Space</p>
        </footer>
    </div>
</body>
</html>
