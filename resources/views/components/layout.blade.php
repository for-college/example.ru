<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>{{ $title }}</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
  <div class="container">
    <nav>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li style="margin-right: auto;"><a href="/" class="nav-link px-2 text-white">Магазин продуктов</a></li>
        <li><a href="/categories" class="nav-link px-2 text-white">Категории</a></li>
        <li><a href="/products" class="nav-link px-2 text-white">Продукты</a></li>
      </ul>
    </nav>
  </div>
</header>
<main>
  {{ $slot }}
</main>
<footer class="p-3 bg-dark text-white mt-4">
  <div class="container">
    <h3>Контакты: ...</h3>
  </div>
</footer>
</body>
</html>
