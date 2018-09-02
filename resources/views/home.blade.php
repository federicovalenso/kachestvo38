@extends('layouts.app')

@section('content')
<header class="w3-center parallax parallax-main">
    <div class="header-text w3-padding-64">
        <h1 class="w3-margin w3-jumbo">Качество</h1>
        <p class="w3-xlarge w3-text-indigo">Возможно лучший сервисный центр Ангарска!</p>
        <button class="w3-button w3-cyan w3-padding-large w3-large w3-margin-top" onclick="location.href='/used'">Б/У картриджи в наличии!</button>
    </div>
</header>

<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
<div class="w3-content">
    <div class="w3-third w3-center">
    <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
    <h1>
    </h1>
    <h5 class="w3-padding-32">Инфа различная.</h5>

    <p class="w3-text-grey">        
        <ul>
            <li>Слишком много фирм заправляющих картриджи?!</li>
            <li>Как выбрать?! Что делать, когда картридж на заправке?!</li>
            <li>Почему нельзя осуществлять заправку у клиента!?</li>
            <li>На все эти вопросы вам дадут ответ в нашей фирме.</li>
        </ul>
    </p>
        
    </div>
</div>
</div>
  
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Что-то дельное или не очень...</h1>
    <p>Мы заботимся о вашем здоровье и чистоте помещений, поэтому не осуществляем заправку «на дому».
            Заправка осуществляется от 1 до 3х дней, в зависимости от необходимости и сложности ремонта. 
            Выезд к Юр. Лицам бесплатно.
    </p>
</div>
@endsection