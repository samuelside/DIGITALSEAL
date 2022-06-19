@extends('layouts.secondary')

@section('titre')
    Enregistrement utilisateur
@endsection

@section('liens')
    <a href="{{ route('admin.dashboard') }}" class="nav-link">Tableau de bord</a>
    <a href="{{ route('demand_CEV') }}" class="nav-link">Créer un cachet électronique visible</a>
    <a href="{{ route('consult2') }}" class="nav-link active">Consulter la liste des certificats</a>
    <a href="#" class="nav-link">Notifications</a>
    <a href="#" class="nav-link">Les demandes en cours</a>
    <a href="#" class="nav-link">Insérer une chemise</a>
    <a href="{{ route('admin.logout') }}" class="nav-link">Se deconnecter</a>
@endsection

@section('contenu')
    <div class="container">
        <h1 class="text-center mt-4"> Liste des certificats </h1>
        <table class="table tableList mt-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Pays</th>
                    <th>Nom de l'organisation</th>
                    <th>Email du serveur</th>
                    <th>Numero de série</th>
                    <th>Date d'origine</th>
                    <th>Date de fin</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($certificates as $certificate)
                    <tr>
                        <td>{{ $certificate->id }}</td>
                        <td>{{ $certificate->Pays }}</td>
                        <td>{{ $certificate->Nom_Orga }}</td>
                        <td>{{ $certificate->email_server }}</td>
                        <td>{{ $certificate->Numero_serie }}</td>
                        <td>{{ $certificate->DteOrigin }}</td>
                        <td>{{ $certificate->Dtefin }}</td>

                    </tr>
                @endforeach
            </tbody>
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
