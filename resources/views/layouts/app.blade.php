<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi App Laravel</title>

  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
  <main class="container">
    @yield('content')
  </main>
</body>
</html>
