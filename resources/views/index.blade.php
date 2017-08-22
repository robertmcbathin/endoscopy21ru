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
                            <img class="d-block" src="assets/img/bg1.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Nature, United States</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="assets/img/bg3.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Somewhere Beyond, United States</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="assets/img/bg4.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Yellowstone National Park, United States</h5>
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
    </div>
    @include('includes.footer')
</div>
@endsection