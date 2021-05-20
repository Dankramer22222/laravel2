<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Молодёжный театр</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-white" href="/home">Главная</a>
        <a class="p-2 text-white" href="/about">Репертуар</a>
        <a class="p-2 text-white" href="/payment">Оплата</a>
        <a class="p-2 text-white" href="/map">Где мы</a>


    </nav>
    <a class="btn btn-warning" href="review">Отзывы</a>
</div>

<div class="container">
    @yield('main content')
</div>



</body>
</html>
