<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="logomarca" class="logo-header"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="/"><strong>Home</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="/produtos"><strong>Eventos</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="/criar"><strong>Criar evento</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark"><strong>Login</strong></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
      <div class="container-fluid">
        <div class="row">
          @if (session('msg'))
              <p class="msg text-center">{{ session('msg') }}</p>
          @endif
          @yield('content')
        </div>
      </div>
    </main>

    <footer>
        <p class="footer-text text-center">HTC EVENTS &copy; 2023</p>
    </footer>
</body>
</html>