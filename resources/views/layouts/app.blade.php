<!DOCTYPE html>
<html lang="ru">
<title>ООО "Качество"</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue-gray w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="menuToggle()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hover-white {{ Request::is('/') ? 'w3-pale-green' : null }}">Главная</a>
    <a href="/price" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white {{ Request::segment(1) === 'products/1' ? 'w3-pale-green' : null }}">Цены</a>
    <a href="/used" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white {{ Request::segment(1) === 'products/2' ? 'w3-pale-green' : null }}">Б/у картриджи</a>
    <a href="/contacts" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white {{ Request::segment(1) === 'contacts' ? 'w3-pale-green' : null }}">Контакты</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="/price" class="w3-bar-item w3-button w3-padding-large">Цены</a>
    <a href="/used" class="w3-bar-item w3-button w3-padding-large">Б/У картриджи</a>
    <a href="/contacts" class="w3-bar-item w3-button w3-padding-large">Контакты</a>
  </div>
</div>

<main class="w3-container">
  @yield('content')
</main>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-8">
    <a href="https://vk.com/kachestvoangarsk">
      <i class="fab fa-vk w3-hover-opacity"></i>
    </a>
 </div>
 <div class="w3-medium w3-padding-8">
    <i class="fas fa-power-off w3-hover-opacity"></i><span> Powered by </span><a href="https://laravel.com/"><i class="fab fa-laravel w3-hover-opacity"></i></a>, <a href="https://www.w3schools.com/w3css/default.asp"><span> W3.CSS</span></a>
 </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
