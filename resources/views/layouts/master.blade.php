
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>nba</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-dark bg-dark">  
    <a class="navbar-brand" href="#">NBA</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Teams <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-item nav-link" href="/register">Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-item nav-link" href="/login">Login</a>
      </li>
      @if(Auth::check())<!--ako user postoji i autentikovan je -->
        <div class="nav-item nav-link">{{ auth()->user()->name}}</div><!--prikazi njegovo ime i logout link -->
        <a class="nav-item nav-link" href="/logout">Logout</a>
        <form action="/logout" method="POST">
        @csrf
          <button class="btn btn-danger" type="submit" >Logout</button>              </form>
      @endif
    </ul>
    </nav>



    @yield('content')



  </div>
</body>
</html>