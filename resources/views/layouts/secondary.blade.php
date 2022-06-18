<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" href="{{ asset('css/secondary.css') }}">
    <title>@yield('titre')</title>
</head>

<body>
    <header>
        <nav class="cc-navbar navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand test-uppercase mx-2 py-1" href="{{ route('home') }}"> <img
                        src="{{ asset('images/logo_artci.jpg') }}" width="100" height="70" alt=""> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav justify-content-end">
                    <li class="nav-item pe-5">
                        <a class="c-nav-link " href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Cachet électronique visible</a></li>
                            <li><a class="dropdown-item" href="#">Certificats électronques </a></li>
                            <li><a class="dropdown-item" href="#">Signature électronique</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pe-5">
                        <a class="c-nav-link" href="#">A propos de nous </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Se connecter
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('login_admin') }}"> Administrateur</a></li>
                            <li><a class="dropdown-item" href="{{ route('login_from') }}"> Utilisateur </a></li>
                            <li><a class="dropdown-item" href="{{ route('login_user') }}"> Usager</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="main">
        <div class="navbar-nav" id="sidebarMenu">
            <a href="{{ route('demand_CEV') }}" class="nav-link">Créer un cachet électronique visible</a>
            <a href="#" class="nav-link">Consulter la liste des certificats</a>
            <a href="#" class="nav-link">Vérification des certificats</a>
            <a href="#" class="nav-link">Notifications</a>
            <a href="#" class="nav-link">Les demandes en cours</a>
            <a href="#" class="nav-link">Insérer une chemise</a>
            <a href="{{ route('login_admin') }}" class="nav-link">Se deconnecter</a>
        </div>
        <div class="contenu">
            @yield('contenu')
        </div>
    </div>

</body>

</html>
