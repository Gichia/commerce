@extends('layouts.app')
@section('content')
    

  <!-- Catalogue -->
  <section id="catalogue" class="pt-3">
        <!-- Page Content -->
        <div class="container">
      
        <!-- Breadcrumbs -->  
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
              </ol>
            </nav>
      
      
              <div class="row">
          
                <div class="col-sm-12 col-lg-3">
                  
                  <h3 class="my-4">Shopping Categories</h3>
                  <div class="list-group">
                    @foreach ($categories as $category)
                      <a href="{{route('shop', ['category' => $category->slug])}}" class="list-group-item">{{$category->name}}</a>
                    @endforeach
                  </div>
          
                </div>
                <!-- /.col-lg-3 -->
          
                <div class="col-sm-12 col-lg-9">
      
                  <h1 class="my-3">{{$title}}</h1>
                  <hr>
      
                  <div class="row py-3">
                    <div class="col-sm-12 col-md-4 mb-2 py-1">
                      <a href="#">
                        <img src="img/catalogue-carousel/whisky.png" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-2 py-1">
                      <a href="#">
                        <img src="img/catalogue-carousel/Beer.png" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-2 py-1">
                      <a href="#">
                        <img src="img/catalogue-carousel/SPIRITS.png" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-2 py-1">
                      <a href="#">
                        <img src="img/catalogue-carousel/Vodka.png" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-2 py-1">
                      <a href="#">
                        <img src="img/catalogue-carousel/Wine.png" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>
      
                  <hr>
          
                  <div class="row">

                    @foreach ($products as $product)

                      <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                          <a href="{{route('shop.show', $product->slug)}}"><img class="card-img-top" src="{{asset('img/products/jameson-1.jpg')}}" alt=""></a>
                          <div class="card-body">
                            <h4 class="card-title text-uppercase">
                              <a href="{{route('shop.show', $product->slug)}}">{{$product->name}}</a>
                            </h4>
                            <h4 class="text-uppercase">Kes. {{$product->price}}.00</h4>
                            <h6>Category: <a href="#">Alcoholic Beverages</a></h6>
                            <p class="card-text">{{$product->details}}</p>
                          </div>
                          <div class="card-footer text-center">
                            <form action="{{route('cart.store')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name" value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <button type="submit" class="btn btn-outline-success btn-xlg">
                                  Add to Cart
                                  <i class="fas fa-shopping-cart"></i>
                                </button>
                            </form>
                          </div>
                        </div>
                      </div>

                    @endforeach
          
                  </div>
                  <!-- /.row -->
      
                  <hr class="bold">
      
                  <!-- Pagination -->
                  <nav class="float-right" aria-label="...">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav> <!-- ./ End Pagination -->
                  <div class="clearfix"></div>
                  
                </div>
                <!-- /.col-lg-9 -->
          
              </div>
              <!-- /.row -->
          
            </div>
            <!-- /.container -->
    </section>      

@endsection