@extends('layouts.app')
@section('content')
     
  <!-- Header -->
  <header id="masthead" class="bg-gradient-primary py-5 text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-5">
              <div class="intro-cards">
                <div class="d-flex">
                  <a href="{{url('/shop')}}" class="card-link w-50 pr-2 pb-4">
                    <div class="card border-0 border-bottom-success">
                      <div class="card-body text-center">
                        <div class="text-center">
                          <i class="fas fa-4x fa-gift my-2 fa-success"></i>
                        </div>
                      Gifts
                      </div>
                    </div>
                  </a>
                  <a href="{{url('/shop')}}" class="card-link w-50 pr-2 pb-4">
                    <div class="card border-0 border-bottom-danger">
                      <div class="card-body text-center">
                        <div class="text-center">
                          <i class="fas fa-4x fa-beer my-2 fa-danger"></i>
                        </div>
                      Liqour
                      </div>
                    </div>
                  </a>
                </div>
                <div class="d-flex">
                    <a href="{{url('/shop')}}" class="card-link w-50 pr-2 pb-4">
                      <div class="card border-0 border-bottom-warning">
                        <div class="card-body text-center">
                          <div class="text-center">
                            <i class="fas fa-4x fa-truck-moving my-2 fa-warning"></i>
                          </div>
                        Courier Services
                        </div>
                      </div>
                    </a>
                    <a href="{{url('/shop')}}" class="card-link w-50 pr-2 pb-4">
                      <div class="card border-0 border-bottom-info">
                        <div class="card-body text-center">
                          <div class="text-center">
                            <i class="fas fa-4x fa-hamburger my-2"></i>
                          </div>
                        Food
                        </div>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
    
            <div class="col-md-8 col-sm-7">
                <div id="itemsCarousel" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#itemsCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#itemsCarousel" data-slide-to="1"></li>
                      <li data-target="#itemsCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                      <a href="#"><img class="d-block img-fluid" src="{{asset('/img/catalogue-carousel/huawei-y6-slider-770x300.png')}}" alt="First slide"></a>
                      </div>
                      <div class="carousel-item">
                          <a href="#"><img class="d-block img-fluid" src="{{asset('img/catalogue-carousel/home-and-living_770x300.png')}}" alt="Second slide"></a>
                      </div>
                      <div class="carousel-item">
                          <a href="#"><img class="d-block img-fluid" src="{{asset('img/catalogue-carousel/personal-care_770x300_1.png')}}" alt="Third slide"></a>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#itemsCarousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#itemsCarousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <h3>Shop Online in Nairobi, Get Fast &amp; Convinient Delivery.</h3>
            </div>
        </div>
        </div>
      </header>
    
      <!-- Catalogue -->
      <section id="catalogue" class="bg-light pt-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 section-header text-center py-2">
                <h2 class="text-uppercase">Our Catalogue</h2>
                <h3 class="text-muted d-none d-lg-block">Browse our catalogue to find what you want and we will deliver to you in minutes.</h3>
              </div>
            </div>
    
              <div class="owl-carousel catalogue-carousel mt-5">

                @foreach ($products as $product)
                  <div class="item m-2">
                    <div class="pic"><a href="{{url('/shop')}}"><img src="{{asset('img/catalogue-carousel/Fruits___Vegetables_380x380_new.png')}}" alt=""></a></div>
                      <div class="details">
                        <h3>{{$product->name}}</h3>
                        <h6 class="text-muted">{{$product->description}}</h6>
                      </div>
                    <div class="item-footer text-center my-3 p-2">
                      <a href="{{url('/shop')}}" class="btn btn-outline-primary">Browse Category</a>
                    </div>
                  </div>
                @endforeach
    
              </div>
    
          </div>
        </section>
    
        <!-- About Section -->
          <section id="about" class="bg-gradient-secondary">
            <div class="container text-white">
              <div class="section-header text-center">
                <h2 class="text-uppercase pt-4">New to Our Services?</h2>
                <h3 class="text-muted p-2">We aim to provide you with online logistics solutions and E-commerce services.</h3>
              </div>
              <div class="row py-5">
                <div class="col-lg-6 about-img  mb-5">
                  <img class="img-fluid" src="{{asset('img/catalogue-carousel/new-customers_neew_updated.png')}}" alt="">
                </div>
      
                <div class="col-lg-6 content">
                  <h2>Take advantage of our convinient and easy to use platform.</h2>
                  <p>
                    We guarantee safe and timely deliveries for your office supplies or home purchases at the click of a button!
                  </p>
    
                  <div class="content-footer text-center mt-5">
                      <a href="{{url('/shop')}}" class="btn btn-outline-warning btn-xlg text-uppercase">Shop Now</a>
                  </div>
                </div>
    
              </div>
      
            </div>
          </section><!-- #about -->
    
        <!-- Partners Section -->
        <section id="partners" class="bg-light py-4">
            <div class="container">
              <div class="section-header text-center py-2 mb-5">
                <h2 class="text-uppercase">Our Partners</h2>
                <h3 class="text-muted">We have teamed up with a few giants to help us provide you with a reliable experience.</h3>
              </div>
      
              <div class="owl-carousel partners-carousel">
                <img src="{{asset('img/clients/client-1.png')}}" alt="">
                <img src="{{asset('img/clients/client-2.png')}}" alt="">
                <img src="{{asset('img/clients/client-3.png')}}" alt="">
                <img src="{{asset('img/clients/client-4.png')}}" alt="">
                <img src="{{asset('img/clients/client-5.png')}}" alt="">
                <img src="{{asset('img/clients/client-6.png')}}" alt="">
              </div>
    
              <div class="section-footer text-center py-5">
                <a href="#" class="btn btn-outline-info btn-xlg text-uppercase">Join Us</a>
              </div>
      
            </div>
    </section><!-- #partners -->

@endsection