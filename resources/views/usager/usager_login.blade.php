<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
</head>
<body>


    <form action="{{ route('usager.login') }}" method='post'>
    @csrf

     <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="Email" class="form-control" id="email"  name='email' aria-describedby="emailHelp" placeholder="Enter email">
        
      </div>



      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" id="password"  name='password' aria-describedby="emailHelp" placeholder="Enter password ">


        <div class="form-group">
            <label for="exampleInputEmail1">votre numéro </label>
            <input type="number" class="form-control" id="numéroTel"  name='numéroTel' aria-describedby="emailHelp" placeholder=" ">
    
      </div>


      <button type="submit" class="btn btn-primary">Se connecter </button>

      <a class="registration" href="{{ route('usager.register') }}">Creer un nouveau compte</a>

   </form>
    
</body>
</html>