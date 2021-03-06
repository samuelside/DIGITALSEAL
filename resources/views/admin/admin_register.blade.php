@extends('layouts.primary')

@section('css')
    {{ asset('css/login_registration.css') }}
@endsection

@section('titre')
    Enregistrement Administrateur
@endsection

@section('contenu')
    <div class="formulaire">
        <form action="{{ route('admin.register.create') }}" method='post' id="formRegi">
            @csrf
            <h1>ENREGISTREMENT ADMINISTRATEUR</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Raison sociale</label>
                        <select class="form-select" name="categorie" size="1">
                            <option disabled selected>Choisissez une raison</option>
                            <option value="Administration publique"> Administration publique </option>
                            <option value="Administration privée">Administration privée </option>
                            <option value="ONG">ONG</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom Commercial </label>
                        <input type="text" class="form-control" id="NomCommercial" name='NomCommercial' placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Code Postal </label>
                        <input type="text" class="form-control" id="CodePostal" name='CodePostal' placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Pays d'origine </label>
                        <input type="text" class="form-control" id="Pays" name='Pays' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Numéro CNI </label>
                        <input type="text" class="form-control" id="CNI" name='CNI' placeholder="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Entrer votre nom</label>
                        <input type="text" class="form-control" id="name" name='name' placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Entrer votre prenom </label>
                        <input type="text" class="form-control" id="prenom" name='prenom' placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Entrer votre adresse email</label>
                        <input type="Email" class="form-control" id="email" name='email'
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name='password'
                            placeholder="Mot de passe">
                    </div>
                </div>
            </div>

            <button id="boutonSoumettre" type="submit" class="btn">S'enregistrer</button>
            <div class="registration">
                <a href="{{ route('login_admin') }}">Déjà enregistré ? Connectez-vous !</a>
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
