<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #FF69B4;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/home')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/artikel')}}">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/contact')}}">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('isi')
</body>
</html>