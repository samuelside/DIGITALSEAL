@extends('layouts.primary')

@section('css')
    {{ asset('css/Formulaire.css') }}
@endsection

@section('titre')
    Demande de CEV
@endsection

</br>
</br>

@section('contenu')
    
<div class="formulaire">
    <form method="post" action="{{ route('CEV_Doc') }}"  enctype="multipart/form-data">
        @csrf 
   
        <h4 class="form-title">Demande de CEV </h4>
   
   <div class="form-row">
     <div class="form-group">
       <label for="exampleInputEmail1">Nom de l'Organisation</label>
       <input type="text" class="form-control" id="NomOrga"  name="NomOrga" aria-describedby="emailHelp" placeholder="ORANGE">
       
     </div>
   
     <div class="form-group">
       <label for="exampleInputEmail1">Identifiant de l'autorité de certification</label>
       <input type="text" class="form-control" id="IDARTCI"  name="IDARTCI" aria-describedby="emailHelp" placeholder="CI01">
   
     </div>
   </div>
   
     <div class="form-group">
       <label for="exampleInputEmail1">Lien vers le 2D-DOC</label>
       <input type="text" class="form-control" id="LienDoc"  name="LienDoc" aria-describedby="emailHelp" placeholder="">
       
     </div>
   
     <div class="form-group">
       <label for="exampleInputEmail1">Numéro du document</label>
       <input type="number" class="form-control" id="NumDoc"  name="NumDoc" aria-describedby="emailHelp" placeholder="526278">
       
     </div>
   
     <div class="form-group">
       <label for="exampleInputPassword1">Email de L'usager</label>
       <input type="email" class="form-control" id="EmailUsager" name="EmailUsager" placeholder="samuelside8@gmail.com">
       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
     <div class="form-row">
     <div class="form-group">
       <label for="exampleInputEmail1">Insérer un document </label>
     <input type="file" id="Document" name="Document"  accept='.pdf'> 
   </div>
     

   <div class="form-group">
    <label for="exampleInputEmail1"> Ajouter un certificat  </label>
  <input type="file" id="Certificat" name="Certificat"  accept='.pem'> 
</div>
     </div>



     <button type="submit" class="btn btn-primary"> Valider </button>
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
