@extends('layouts.secondary')

@section('css')
    {{ asset('css/Formulaire.css') }}
@endsection

@section('titre')
    Demande de CEV
@endsection

@section('contenu')
    <form method="post" action="{{ route('CEV_Doc') }}" enctype="multipart/form-data">
        @csrf
        <h3 class="form-title text-center mb-4">Demande de CEV </h3>
        <div class="row p-4">
            <div class="col-lg-6">
                <div class="form-group mb-3">
                    <label for="NomOrga" class="form-label">Nom de l'Organisation</label>
                    <input type="text" id="NomOrga" class="form-control" id="NomOrga" name="NomOrga" aria-describedby="emailHelp"
                        placeholder="ORANGE">
                </div>
                <div class="form-group mb-3">
                    <label for="IDARTCI" class="form-label">Identifiant de l'autorité de certification</label>
                    <input type="text" class="form-control" id="IDARTCI" name="IDARTCI" aria-describedby="emailHelp"
                        placeholder="CI01">
                </div>
                <div class="form-group mb-3">
                    <label for="LienDoc" class="form-label">Lien vers le 2D-DOC</label>
                    <input type="text" class="form-control" id="LienDoc" name="LienDoc" aria-describedby="emailHelp"
                        placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="NumDoc" class="form-label">Numéro du document</label>
                    <input type="number" class="form-control" id="NumDoc" name="NumDoc" aria-describedby="emailHelp"
                        placeholder="526278">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group mb-3">
                    <label for="EmailUsager" class="form-label">Email de L'usager</label>
                    <input type="email" class="form-control" id="EmailUsager" name="EmailUsager"
                        placeholder="samuelside8@gmail.com">
                </div>
                <div class="form-group mb-3">
                    <label for="formFile1" class="form-label">Insérer un document </label>
                    <input class="form-control" type="file" id="formFile1" name="Document" accept='.pdf'>
                </div>
                <div class="form-group mb-3">
                    <label for="formFile2" class="form-label">Ajouter un certificat</label>
                    <input class="form-control" type="file" id="formFile2" name="Certificat" accept='.pem'>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary"> Valider </button>
        </div>
    </form>

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
