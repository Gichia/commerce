@extends('layouts.app')
@section('content')

 <!-- Catalogue -->
 <section id="item-description" class="bg-light pt-3">
        <!-- Page Content -->
        <div class="container">
      
            <!-- Breadcrumbs -->  
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('shop')}}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
              </ol>
            </nav>
      
              <div class="row">
      
                <div class="col-lg-6">
                  <div class="item-image py-4">
                    <img src="{{asset('img/products/red_label-1.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
                <!-- /.col-lg-3 -->
          
                <div class="col-lg-6">
          
                  <div class="row">
                      <div class="item-description p-4">
                          <h1 class="text-uppercase">{{$product->name}}</h1>
                          <hr>
                          <div class="content">
                            <small class="float-right"><strong>Units Left:</strong> 50</small>
                            <div class="clearfix"></div>
                            <h4>Description:</h4>
                            <p>{{$product->description}}</p>
                          </div>
                          <div class="features">
                            <h4>What you get:</h4>
                            <ul>
                              <li>Feature one</li>
                              <li>Feature two</li>
                              <li>Feature three</li>
                              <li>Feature four</li>
                            </ul>
                          </div>
                          <div class="price">
                            <h5>Price:</h5>
                            <h2 class="text-uppercase"><strong>Kes {{$product->price}}.00</strong></h2>
                          </div>
                          <div class="payment-img py-3">
                            <h6><strong>Buy Online</strong></h6>
                            <img src="{{asset('img/lipampesa.png')}}" alt="" class="img-fluid">
                          </div>
                          <div class="pay py-3">
                            <h4>Order Now:</h4>
                            <form action="{{route('cart.store')}}" method="POST">
                              {{csrf_field()}}
                              <input type="number" placeholder="1">
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <input type="hidden" name="name" value="{{$product->name}}">
                              <input type="hidden" name="price" value="{{$product->price}}">
                              <button type="submit" class="btn btn-outline-warning btn-cart tetxt-uppercase">Add to Cart</button>
                            </form>
                          </div>
                      </div>
                  </div>
                  <!-- /.row -->
          
                </div>
                <!-- /.col-lg-9 -->
          
              </div>
              <!-- /.row -->
          
            </div>
            <!-- /.container -->
    </section>

@endsection