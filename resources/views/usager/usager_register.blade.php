@extends('layouts.primary')

@section('css')
    {{ asset('css/login_registration.css') }}
@endsection

@section('titre')
    Enregistrement utilisateur
@endsection

@section('contenu')
    <div class="formulaire">
        <form action="{{ route('usager.register.create') }}" method='post'>
            @csrf
            <h1>ENREGISTREMENT USAGER</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Entrer votre nom</label>
                <input type="text" class="form-control" id="name" name='name' placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Entrer votre adresse email</label>
                <input type="Email" class="form-control" id="email" name='email' aria-describedby="emailHelp"
                    placeholder="adresse@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Entrer votre mot de passe</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Entrer votre numéro de téléphone</label>
                <input type="number" class="form-control" id="numéroTel" name='numéroTel' placeholder=" ">
            </div>
            <button id="boutonSoumettre" type="submit" class="btn">S'enregistrer</button>
            <div class="registration">
                <a href="{{ route('login_user') }}">Déjà enregistré ? Connectez-vous !</a>
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
