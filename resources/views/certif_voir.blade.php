@extends('layouts.primary')

@section('css')
    {{ asset('css/login_registration.css') }}
@endsection

@section('titre')
    Enregistrement utilisateur
@endsection

@section('contenu')


<h1> Liste des certificats </h1>

<table>
    <thead>
      <tr>
        <th>id</th>
      <th>Pays</th>
      <th>Nom_Orga</th>
      <th>email_server</th>
      <th>Numero_serie</th>
      <th>DteOrigin</th>
      <th>Dtefin</th>
     
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
