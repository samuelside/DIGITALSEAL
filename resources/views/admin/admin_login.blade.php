<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/AdminLog.css')}}>

    <title>Login Admin </title>
</head>
<body>

  <nav class="cc-navbar navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand test-uppercase mx-2 py-1"  href="#"> <img src="images/logo_artci.jpg" width="100" height="70" alt=""> </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    
    

     <ul class="nav justify-content-end">
      <li class="nav-item pe-5">
        <a class="c-nav-link " href="#">Accueil</a>
      </li>
    
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nos services 
              </a>
              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Cachet électronique visible</a></li>
                <li><a class="dropdown-item" href="#">Certificats électronques </a></li>
                <li><a class="dropdown-item" href="#">Signature électronique</a></li>
              </ul>
        </li>
    
    
      
      <li class="nav-item pe-5">
        <a class="c-nav-link" href="#">A propos de nous </a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Se connecter 
        </a>
        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="{{ route('login_admin') }}"> Administrateur</a></li>
          <li><a class="dropdown-item" href="{{ route('login_from') }}">  Utilisateur </a></li>
          <li><a class="dropdown-item" href="{{ route('login_user') }}"> usager</a></li>
        </ul>
  </li>
    
      
     </ul>
    

    
    
    </nav>
    <div class="titre">  <h4>Bienvenue sur DIGITAL SEAL ARTCI</h4> 
    







<section>
    <form action="{{ route('admin.login') }}" method='post'>
    @csrf

     <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="Email" class="form-control" id="email"  name='email' aria-describedby="emailHelp" placeholder="Enter email">
        
      </div>



      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" id="password"  name='password' aria-describedby="emailHelp" placeholder="Enter password ">


        <div class="form-group">
            <label for="exampleInputEmail1">votre identifiant</label>
            <input type="text" class="form-control" id="identifiant"  name='identifiant' aria-describedby="emailHelp" placeholder=" ">
    
      </div>


      <button type="submit" class="btn btn-primary">Se connecter </button>

      <a class="registration" href="{{ route('admin.register') }}">Creer un nouveau compte</a>
   </form>
  </section>



  <script  src="assets/js/bootstrap.bundle.min.js">    </script>   

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        <script src="assets/js/bootstrap.bundle.js">  </script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     
      
     
     
</body>
</html>

