<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  <!-- Bootstrap & JS via Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
  class="d-flex flex-column min-vh-100"
  style="background-color: #FDFDFC; color: #1b1b18;"
>
  @if (Route::has('login'))
    <nav class="navbar navbar-expand-lg bg-white border-bottom py-2">
      <div class="container">
        <div class="navbar-nav ms-auto">
          @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark btn-sm me-2">
              Dashboard
            </a>
          @else
            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm me-2">
              Log in
            </a>
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-sm">
              Register
            </a>
          @endauth
        </div>
      </div>
    </nav>
  @endif

  <main class="flex-fill d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
          <div class="card shadow-sm my-5">
            <div class="card-body p-5 text-center">
              <h1 class="h6 mb-0">Hier entsteht die Startseite</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
