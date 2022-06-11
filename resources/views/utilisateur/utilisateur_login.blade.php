<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{asset('css/AdminRegist.css')}}>


  <section>

    <form action="{{ route('utilisateur.login') }}" method='post'>
    @csrf

     <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="Email" class="form-control" id="email"  name='email' aria-describedby="emailHelp" placeholder="Enter email">
        
      </div>



      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" id="password"  name='password' aria-describedby="emailHelp" placeholder="Enter password ">


        <div class="form-group">
            <label for="exampleInputEmail1">Nom de l'organisation </label>
            <input type="text" class="form-control" id="NomOrga"  name='NomOrga' aria-describedby="emailHelp" placeholder=" ">
    
      </div>


      <button type="submit" class="btn btn-primary">Se connecter </button>

      <a class="registration" href="{{ route('utilisateur.register') }}">Creer un nouveau compte</a>
   </form>
  </section>
  <script  src="assets/js/bootstrap.bundle.min.js">    </script>   

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
   <script src="assets/js/bootstrap.bundle.js">  </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
       
</body>
</html>