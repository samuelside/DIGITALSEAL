@extends('layouts.secondary')

@section('titre')
    La liste des administrateurs
@endsection

@section('liens')
    <a href="{{ route('admin.dashboard') }}" class="nav-link">Tableau de bord</a>
    <a class="nav-link" href="{{ route('verif') }}">Créer un annuaire </a>
    <a class="nav-link active" href="{{ route('consult1') }}">Liste des participants</a>
    <a class="nav-link" href="{{ route('login_from') }}">Se deconnecter</a>
@endsection

@section('contenu')
    <div class="container">
        <h1 class="text-center mt-4"> Liste des administrateurs </h1>
        <table class="table tableList mt-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Catégorie</th>
                    <th>Nom commercial</th>
                    <th>Code postal</th>
                    <th>Pays</th>
                    <th>Nom</th>
                    <th>Prénoms</th>
                    <th>N° CNI</th>
                    <th>Email</th>
                    <th>Identifiant</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->categorie }}</td>
                        <td>{{ $admin->NomCommercial }}</td>
                        <td>{{ $admin->CodePostal }}</td>
                        <td>{{ $admin->Pays }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->prenom }}</td>
                        <td>{{ $admin->CNI }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->identifiant }}</td>
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
