@extends('site.master.layout')

@section('content')
    <div class="bannerTop">
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-content-bg">
                            <div class="row">
                                <div class="heading-content col-md-12">
                                    <h2>Detalhes do <em>Carro</em></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="details-container">
        <div class="info-car single-car">
            <div class="container">
                <div class="info-car-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="single-car" class="slider-pro">
                                <div class="sp-slides">
                                    <div class="sp-slide">
                                        <img class="sp-image" src="{{ route('site.home')}}/storage/{{ $car->path }}" alt="" width="500" height="500"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="car-details">
                            <h4>{{ $car->marca }} {{ $car->modelo }}</h4>
                                <span>R${{ $car->valor }}</span>
                                <p>{{ $car->descricao }}</p>
                                <div class="container">
                                    <div class="row">
                                        <ul class="car-info col-md-6">
                                            <li><i><span class="iconify" data-icon="clarity:date-line" data-inline="false"></span></i><p>{{ $car->ano }}</p></li>
                                            <li><i><span class="iconify" data-icon="ic:baseline-speed" data-inline="false"></span></i><p>{{ $car->velocidade }}p/h</p></li>
                                            <li><i><span class="iconify" data-icon="fa-solid:road" data-inline="false"></span></i><p>{{ $car->KmRodados }}km</p></li>
                                            <li><i><span class="iconify" data-icon="maki:fuel-11" data-inline="false"></span></i><p>{{ $car->combustivel }}</p></li>
                                        </ul>
                                        <ul class="car-info col-md-6">
                                            <li><i ><span class="iconify" data-icon="dashicons:art" data-inline="false"></span></i><p>{{ $car->cor }}</p></li>
                                            <li><i ><span class="iconify" data-icon="whh:manualshift" data-inline="false"></span></i><p>{{ $car->cambio }}</p></li>
                                            <li><i ><span class="iconify" data-icon="mdi:car-door" data-inline="false"></span></i><p>{{ $car->portas }}/5</p></li>
                                            <li><i ><span class="iconify" data-icon="mdi:engine" data-inline="false"></span></i><p>{{ $car->motor }}</p></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="similar-info">
                                    @if (session()->exists('user_loged'))
                                        @if (session('user_loged')->id === $car->user_id)
                                            <div class="row">
                                                <a href="{{ route('site.carUpdate') }}?id={{ $car->id }}" class="mr-sm-4">
                                                    <button class="btn btn-info">
                                                        Editar
                                                    </button>
                                                </a>
                                                <a href="{{ route('site.deleteCar') }}?id={{ $car->id }}">
                                                    <button class="btn btn-danger">
                                                        Deletar
                                                    </button>
                                                </a>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-wow-duration="1s">
                    <div class="item">
                        <div class="sep-section-heading">
                            <h2>Entrar em <em>Contato</em></h2>
                        </div>
                        <div class="contact-info">
                            <div class="row">
                                <div class="phone col-md-12 col-sm-6 col-xs-6">
                                <i class="fa fa-phone"></i><span>+55 {{  $car->telefone }}</span>
                                </div>
                                <div class="mail col-md-12 col-sm-6 col-xs-6">
                                    <i class="fa fa-envelope"></i><span>{{  $car->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
