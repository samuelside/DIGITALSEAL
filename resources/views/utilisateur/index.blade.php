@extends('layouts.secondary')

@section('titre')
    Tableau de bord
@endsection

@section('liens')
    <a href="{{ route('admin.dashboard') }}" class="nav-link active">Tableau de bord</a>
    <a class="nav-link" href="{{ route('verif') }}">Créer un annuaire </a>
    <a class="nav-link" href="{{ route('consult1') }}">Liste des participants</a>
    <a class="nav-link" href="{{ route('login_from') }}">Se deconnecter</a>
@endsection

@section('contenu')
    <div class="border rounded-3 col-lg-8 mt-4 container p-4">
        <h2 class="text-center mt-3 mb-4">Bienvenue sur votre tableau de bord</h2>
        <table class="table infosAuth">
            <tr>
                <th>Type de compte</th>
                <td>Utilisateur</td>
            </tr>
            <tr>
                <th>Nom administrateur</th>
                <td>{{ Auth::guard('utilisateur')->user()->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ Auth::guard('utilisateur')->user()->email }}</td>
            </tr>
        </table>
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
