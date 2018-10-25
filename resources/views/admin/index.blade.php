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
<nav class="w3-sidebar w3-overlay w3-card-4 w3-animate-left" id="adminSidebar">
  <div class="w3-bar w3-dark-grey">
    <span class="w3-bar-item w3-padding-16">Меню</span>
    <button onclick="w3_close()" class="w3-bar-item w3-button w3-right w3-padding-16" title="Закрыть">×</button>
  </div>
  <div class="w3-bar-block">
    <a href="{{ route('home')}}" class="w3-bar-item w3-button w3-red w3-hover-green">Главная</a>
    <div class="w3-dropdown-hover">
        <button class="w3-button w3-blue w3-hover-green">Прайс <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block">
            <a href="{{ route('categories.index') }}" class="w3-bar-item w3-button w3-lime w3-hover-green">Категории товаров</a>
            <a href="{{ route('products.index') }}" class="w3-bar-item w3-button w3-lime w3-hover-green">Классификатор товаров</a>
        </div>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-blue w3-hover-green">Новости</a>    
  </div>
</nav>
<div>
    <div class="w3-container w3-display-container">
      <span title="Открыть сайдбар" style="display: inline-block;" id="openNav" class="w3-button w3-transparent w3-display-topleft w3-xlarge" onclick="w3_open()">☰</span>
    </div>
</div>

<div class="w3-main" id="main">
  <main class="w3-row w3-center">
    @yield('content')
  </main>
  @include('layouts.footer')
</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>