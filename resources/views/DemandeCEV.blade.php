@extends('layouts.secondary')

@section('css')
    {{ asset('css/Formulaire.css') }}
@endsection

@section('titre')
    Demande de CEV
@endsection

@section('liens')
    <a href="{{ route('admin.dashboard') }}" class="nav-link">Tableau de bord</a>
    <a href="{{ route('demand_CEV') }}" class="nav-link active">Créer un cachet électronique visible</a>
    <a href="{{ route('consult2') }}" class="nav-link">Consulter la liste des certificats</a>
    <a href="#" class="nav-link">Notifications</a>
    <a href="#" class="nav-link">Les demandes en cours</a>
    <a href="#" class="nav-link">Insérer une chemise</a>
    <a href="{{ route('admin.logout') }}" class="nav-link">Se deconnecter</a>
@endsection

@section('contenu')
    <div class="formulaire container col-lg-7 border rounded-3 mt-4">
        <form method="post" action="{{ route('CEV_Doc') }}" enctype="multipart/form-data">
            @csrf

            <h2 class="form-title text-center mb-4">Demande de CEV </h2>
            <div class="form-group mb-2">
                <label for="NomOrga" class="form-label">Nom de l'Organisation</label>
                <input type="text" class="form-control" id="NomOrga" name="NomOrga" aria-describedby="emailHelp"
                    placeholder="Organisation">
            </div>
            <div class="form-group mb-2">
                <label for="IDARTCI" class="form-label">Identifiant de l'autorité de certification</label>
                <input type="text" class="form-control" id="IDARTCI" name="IDARTCI" aria-describedby="emailHelp"
                    placeholder="Identifiant">
            </div>
            <div class="form-group mb-2">
                <label for="NumDoc" class="form-label">Numéro du document</label>
                <input type="number" class="form-control" id="NumDoc" name="NumDoc" aria-describedby="emailHelp"
                    placeholder="Numéro">
            </div>
            <div class="form-group mb-2">
                <label for="EmailUsager" class="form-label">Email de L'usager</label>
                <input type="email" class="form-control" id="EmailUsager" name="EmailUsager"
                    placeholder="adresse@mail.com">
                <small id="emailHelp" class="form-text text-muted">Nous ne partegerons pas votre email.</small>
            </div>
            <div class="form-group mb-2">
                <label for="Document" class="form-label">Insérer un document </label>
                <input class="form-control" type="file" id="Document" name="Document" accept='.pdf'>
            </div>
            <div class="container text-center mt-3">
                <button type="submit" class="btn btn-primary"> Valider </button>
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
