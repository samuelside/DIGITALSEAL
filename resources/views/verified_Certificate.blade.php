@extends('layouts.secondary')

@section('css')
    {{ asset('css/Formulaire.css') }}
@endsection

@section('titre')
    Création d'annuaire
@endsection

@section('liens')
    <a href="{{ route('utilisateur.dashboard') }}" class="nav-link">Tableau de bord</a>
    <a class="nav-link active" href="{{ route('verif') }}">Créer un annuaire </a>
    <a class="nav-link" href="{{ route('consult1') }}">Liste des participants</a>
    <a class="nav-link" href="{{ route('utilisateur.logout') }}">Se deconnecter</a>
@endsection

@section('contenu')
    <div class="formulaire container col-lg-7 border rounded-3 mt-4">
        <form action="{{ route('create') }}" method='post' enctype="multipart/form-data">
            <h2 class="text-center mb-4">Créer un annuaire</h2>
            @csrf
            <div class="form-group">
                <label for="Certificat" class="form-label"> Ajouter un certificat </label>
                <input class="form-control" type="file" id="Certificat" name="Certificat" accept='.pem'>
            </div>
            <div class="container text-center mt-3">
                <button type="submit" class="btn btn-primary"> Soumettre </button>
            </div>
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
