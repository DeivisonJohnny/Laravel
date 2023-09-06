<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica" rel="stylesheet">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">





    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title')</title>

    <!-- script da aplicação -->
    <script src="/js/main.js" defer></script>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/quadrinho.png" alt="quadrinho" id="quadrinho">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadatrar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    @yield('content')

    <footer>
        <p>HDC Events $copy; 2020</p>
    </footer>

</body>

    <!-- icon ionicons  -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</html>