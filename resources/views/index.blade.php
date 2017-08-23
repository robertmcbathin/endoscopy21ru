@extends('layouts.master')
@section('description')

@endsection
@section('keywords')

@endsection
@section('title')
Эндоскопический центр
@endsection
@section('content')
<div class="wrapper">
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" data-parallax="true" style="background-image: url(/assets/img/ligator-bgg.jpg) ;">
        </div>
        <div class="container">
          <div class="row justify-content-left slider-center">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block" src="assets/img/slider/1.jpg" alt="Обследование пищевода, желудка, кишечника. Выявление раннего рака. Проктология. Узи">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="black-text">Обследование пищевода, желудка, кишечника. Выявление раннего рака. Проктология. Узи</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="assets/img/slider/2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Трансназальная ФГДС</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="assets/img/slider/3.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="black-text">Лигирование геморроидальных узлов латексными кольцами позволяет избежать сложной операции в условиях стационара примерно около 80% больных геморроем</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                </div>
            </div>
        </div>  
    </div>
</div>
</div>
<div class="section">
    <div class="container">
        <div class="about-description text-center">
            <div class="row">
                <div class="features-3">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="title">Мы предлагаем</h2>
                            <h4 class="description">Ряд специализированных обследований, которые помогут Вам сохранить здоровье и долголетие!</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">ФГДС</h4>
                                <p class="description"><b>Фиброэзофагогастродуоденоскопия</b> под видеоконтролем - исследование состояния слизистой оболочки пищевода, желудка и двенадцатиперстной кишки</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">ФКС</h4>
                                <p class="description"><b>Колоноскопия</b> (исследование толстого кишечника), для выявления различной патологии, включая и онкопатологию</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">УЗИ</h4>
                                <p class="description">Исследование Вашего организма с использованием высокотехнологичного аппарата при помощи ультразвуковых волн</p>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">Проктология</h4>
                                <p class="description">Выявление и лечение болезней толстой кишки</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">Гастроэнтерология</h4>
                                <p class="description">Диагностика и лечение заболеваний желудочно-кишечного тракта</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">Невролог</h4>
                                <p class="description">Диагностика заболеваний центральной и периферической нервной системы</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-2">
                            <div class="info info-hover">
                                <h4 class="info-title">Терапевт</h4>
                                <p class="description">Комплексная диагностика состояния здоровья</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-hover">
                                <h4 class="info-title">Эндокринолог</h4>
                                <p class="description">Профилактика и лечение патологий эндокринной системы</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="about-description text-center">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="title">Как нас найти</h2>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-8 offset-md-2">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="now-ui-icons location_pin"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Мы находимся по адресу</h4>
                                    <p> г.Чебоксары, ул. Ярославская, д.72, офис 1 (остановка "Дом торговли")
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
        </div>
</div>
<div class="cd-section" id="contactus">
            <!--     *********    CONTACT US 1     *********      -->
            <div class="contactus-1 section-image contacts-block" style="background-image: url('assets/img/ldp-map.jpg')">
              
            </div>
            </div>
            <!--     *********    END CONTACT US 1      *********      -->
@include('includes.footer')
</div>
@endsection