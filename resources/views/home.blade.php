@extends('layouts.app')

@section('content')
<header class="w3-center parallax parallax-main">
    <div class="header-text w3-padding-64">
        <h1 class="w3-margin w3-jumbo">Качество</h1>
        <p class="w3-xlarge w3-text-indigo">Возможно лучший сервисный центр Ангарска!</p>
        <button class="w3-button w3-cyan w3-padding-large w3-large w3-margin-top" onclick="location.href='/used'">Б/У картриджи в наличии!</button>
    </div>
</header>

<div id="app" class="w3-row-padding w3-light-grey w3-padding-16 w3-container">
<slider-component :sliders="{{ $sliders }}"></slider-component>
</div>
  
<div class="w3-container w3-black w3-center w3-opacity w3-padding-16">
    <h1 class="w3-margin w3-xlarge">Важно!</h1>
    <p>Мы заботимся о вашем здоровье и чистоте помещений, поэтому не осуществляем заправку «на дому».
        Заправка осуществляется от 1 до 3х дней, в зависимости от необходимости и сложности ремонта. 
        Выезд к Юр. Лицам бесплатно.
    </p>
    <p>Вся информация представленная на данном сайте справочная, не является публичной офертой.
</p>
</div>
@endsection