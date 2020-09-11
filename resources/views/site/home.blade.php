@extends('site.master.layout')

@section('content')
    <div class="carousel-banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="https://puriwp.com/cocotemplates/html/acropos/assets/images/main_slide_01.jpg" class="d-block w-100 h-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://puriwp.com/cocotemplates/html/acropos/assets/images/main_slide_02.jpg" class="d-block w-100 h-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://puriwp.com/cocotemplates/html/acropos/assets/images/main_slide_03.jpg" class="d-block w-100 h-100" alt="...">
              </div>
            </div>
        </div>

        <div class="top-slider-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-top-features">
                            <div id="owl-top-features" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" >
                                @if ($cars != null)
                                    @foreach ($cars as $item)
                                        <div class="owl-item cloned" >
                                            <div class="item car-item">
                                                <div class="thumb-content">
                                                <a href="{{ route('site.details') }}?id={{ $item->id }}"><img src="{{ route('site.home') }}/storage/{{ $item->path }}" alt="" width="200" height="150"></a>
                                                </div>
                                                <div class="down-content">
                                                    <a href="{{ route('site.details') }}?id={{ $item->id }}"><h4>{{  $item->marca .' '. $item->modelo}}</h4></a>
                                                    <span>${{ $item->valor }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev">
                                        <span aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next">
                                        <span aria-label="Next">›</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="infos col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="card-info col-md-6">
                                <div class="service-item">
									<i class="fa fa-car"></i>
									<div class="text-content">
										<h6>Vender e Comprar Carros</h6>
										<p>Realize o sonho do seu carro próprio com os melhores preços do mercad.</p>
									</div>
								</div>
                            </div>
                            <div class="card-info col-md-6">
                                <div class="service-item">
									<i class="fa fa-search"></i>
									<div class="text-content">
										<h6>Encontre o carro perfeito</h6>
										<p>Busque pela qualidade e conforto que sua família merece.</p>
									</div>
								</div>
                            </div>
                            <div class="card-info col-md-6">
                                <div class="service-item">
									<i class="fa fa-users"></i>
									<div class="text-content">
										<h6>A Melhor</h6>
										<p>Concessionária mais requisitada no mercado de carros.</p>
									</div>
								</div>
                            </div>
                            <div class="card-info col-md-6">
                                <div class="service-item">
									<i class="fa fa-globe"></i>
									<div class="text-content">
										<h6>Conhecido mundialmente</h6>
										<p>Conhecida mundialmente por sua facilidade em comprar e alugar carros.</p>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recents-car">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <div class="icon col-md-12">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="text-content col-md-12">
                                <h2>Novos Carros</h2>
                                <span>Verifique nossas postagens recentes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
            @if ($recents_cars != null)
                @foreach ($recents_cars as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="car-item" >
                            <div class="thumb-content">
                                <div class="thumb-inner">
                                <a href="{{ route('site.details') }}?id={{ $item->id }}"><img src="{{ route('site.home')}}/storage/{{ $item->path }}" alt=""></a>
                                </div>
                            </div>
                            <div class="down-content">
                                <a href="{{ route('site.details') }}?id={{ $item->id }}"><h4>{{  $item->marca .' '. $item->modelo}}</h4></a>
                                <span>${{  $item->valor }}</span>
                                <p>{{  $item->marca }}</p>
                                <ul class="car-info">
                                    <li><div class="item"><span class="iconify" data-icon="codicon:calendar" data-inline="false"></span><p>{{  $item->ano }}</p></div></li>
                                    <li><div class="item"><span class="iconify" data-icon="ic:outline-speed" data-inline="false"></span><p>{{  $item->velocidade }}p/h</p></div></li>
                                    <li><div class="item"><span class="iconify" data-icon="fa-solid:road" data-inline="false"></span><p>{{  $item->KmRodados }}km</p></div></li>
                                    <li><div class="item"><span class="iconify" data-icon="maki:fuel-11" data-inline="false"></span><p>{{  $item->combustivel }}</p></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
                </div>
            </div>
        </div>
    </div>
@endsection
