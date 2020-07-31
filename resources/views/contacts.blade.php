
@extends ('layout')
@section('content')
<div class="container">
    <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumb__link" href="/" itemprop="item"><span itemprop="name">Кафе «Лапша и Суши»</span><meta itemprop="position" content="1" /></a></li>
      <li>Контакты</li>
    </ul>
    <div class="title">
      <div class="title__wrap">
        <h1>Контакты</h1>
      </div>
    </div>
    <div class="text text--white-bg">
      <div class="text__title">
        <h2>Кафе «Лапша и Суши»</h2>
      </div>
      <p>Прием телефонных звонков и обработка заказов осуществляется по будням (пн-пт) с 10:00 до 19:00 по МСК. <br/>Заказы через интернет принимаются круглосуточно!</p>
      <div class="text__title">
        <h2>Реквизиты:</h2>
      </div>
      <p>ИП: Разработка В.В. (г.Москва)<br>ИНН: 00000000<br>ОГРНИП: 0000000000</p>
      <div class="text__title">
        <h2>Телефоны:</h2>
      </div>
      <p><a href="tel:+79268354441">+7 (926) 835 44 41</a><br><a href="tel:+79268354441">+7 (926) 835 44 4</a></p>
      <p><a href="" class="js-button-callback">Заказать обратный звонок</a></p>
      <div class="text__title">
        <h2>Электронная почта:</h2>
      </div>
      <p><a href="mailto:info@lasushi.ru">info@lasushi.ru</a></p>
      <div class="text__signature">С уважением, lasushi.ru!</div>
    </div>
</div>@endsection
