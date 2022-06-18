
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" href="{{ asset('css/dashbordAdmin.css') }}">
</head>
<body>


    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <!-- Brand -->
          
            <a class="navbar-brand " href="{{ route('home') }}"> <img src="{{ asset('images/logo_artci.jpg') }}" width="100"
                height="70" alt=""> </a>
          
          <!-- Search form -->
          <form class="d-none d-md-flex input-group w-auto my-auto">
            <input autocomplete="off" type="search" class="form-control rounded"
              placeholder='Recherche' style="min-width: 225px;" />
            <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
          </form>

          <!-- Right links -->
          
         
        </div>
        <!-- Container wrapper -->
      </nav>
    
</body>
</html>
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        
        <a href="{{ route('demand_CEV') }}" class="list-group-item list-group-item-action py-2 ripple riple">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Créer un cachet électronique visible</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-lock fa-fw me-3"></i><span>Consulter la liste des certificats </span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-line fa-fw me-3"></i><span>Vérification des certificats </span></a>
        
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-bar fa-fw me-3"></i><span>Notifications</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-globe fa-fw me-3"></i><span>Les demandes en cours </span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-building fa-fw me-3"></i><span>Insérer une chemise</span></a>
        
        <a href="{{ route('login_admin') }}" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-money-bill fa-fw me-3"></i><span>Se deconnecter </span></a>
      </div>
    </div>
  </nav>

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

