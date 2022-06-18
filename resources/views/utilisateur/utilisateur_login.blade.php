@extends('layouts.primary')

@section('css')
    {{ asset('css/login_registration.css') }}
@endsection

@section('titre')
    Connexion administrateur
@endsection

@section('contenu')
    <div class="formulaire">
        <form action="{{ route('utilisateur.login') }}" method='post'>
            @csrf
            <h1>CONNEXION UTILISATEUR</h1>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Entrer votre adresse email</label>
                <input type="Email" class="form-control" id="email" name='email' aria-describedby="emailHelp"
                    placeholder="adresse@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Entrer votre mot de passe</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Mot de passe">
            </div>
            <button id="boutonSoumettre" type="submit" class="btn">Se connecter </button>
            <div class="registration">
                <a href="{{ route('utilisateur.register') }}">Pas de compte ? Créer un nouveau compte !</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
@endsection
