<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer Certificat </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('css/AdminRegist.css')}}>
</head>
<body>



  <section>
   <form action="{{ route('liste') }}" method='post'>
    @csrf

     <div class="form-group">
        <label for="exampleInputEmail1">Nom de l'orga</label>
        <input type="text" class="form-control" id="Nom_Orga"  name='Nom_Orga' aria-describedby="emailHelp" placeholder="Enter email">
        
      </div>



      <div class="form-group">
        <label for="exampleInputEmail1">identifiant de l'AC </label>
        <input type="text" class="form-control" id="ID_AC"  name='ID_AC' aria-describedby="emailHelp" placeholder="Enter password ">


        <div class="form-group">
            <label for="exampleInputEmail1">Email server </label>
            <input type="email" class="form-control" id="email_server"  name='email_server' aria-describedby="emailHelp" placeholder=" ">
    
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1"> Id du certificat </label>
        <input type="text" class="form-control" id="id_Certificate"  name='id_Certificate' aria-describedby="emailHelp" placeholder=" ">

  </div>


      <button type="submit" class="btn btn-primary"> Créer </button>

      
   </form>
  </section>
  <script  src="assets/js/bootstrap.bundle.min.js">    </script>   

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
   <script src="assets/js/bootstrap.bundle.js">  </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
       
    
</body>
</html>