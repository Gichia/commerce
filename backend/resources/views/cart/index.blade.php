@extends('layouts.app')
@section('content')

<!-- Catalogue -->
<section id="item-description" class="bg-light pt-3">
        <!-- Page Content -->
        <div class="container">
            @if (session()->has('success_message'))
                <div class='alert alert-success'>
                    {{session()->get('success_message')}}
                </div>
            @endif

            
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Breadcrumbs -->  
            <h1 class="mb-4">Shopping Cart</h1>
            <a href="{{route('shop')}}" class="btn btn-info btn-xlg"><i class="fas fa-arrow-left pr-3"></i> Back to Shopping</a>
      
              <div class="row">

                <div class="col-lg-8">
                @if (Cart::count() > 0)
                  <div class="cart-table py-4">
                      <table class="table">
                          <thead class="thead-dark">
                              <tr>
                                  <th scope="col">Item</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Qty</th>
                                  <th scope="col">Subtotal</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach (Cart::content() as $item)
                                <tr>
                                    <th>
                                        <a href="{{route('shop.show', $item->model->slug)}}">
                                            <img style="height:100px" src="{{asset('img/products/jack-daniels.jpg')}}" alt="Product Image" class="img-fluid">
                                            <p>{{$item->model->name}}</p>
                                        </a>
                                    </th>
                                    <td>
                                        <strong class="text-uppercase">Kes. {{$item->model->price}}.00</strong>
                                    </td>
                                    <td>
                                        <div class="pay">
                                            <input type="number" placeholder="1">
                                            <form action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="text-danger">Remove Item</button>
                                            </form>
                                            <form action="{{route('cart.saveForLater', $item->rowId)}}" method="POST">
                                                {{csrf_field()}}
                                                <button type="submit" class="text-info">Save for Later</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <strong class="text-uppercase">Kes. {{$item->model->price}}.00</strong>
                                    </td>
                                </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                  <hr>
                @else
                  <h1 class="py-2">No items in your cart!</h1>
                @endif
                </div>
                <!-- /.col-lg-8 -->
          
                <div class="col-lg-4">
          
                  <div class="row">
                      <div class="cart-summary p-4">
                          <div class="card">
                              <h4 class="card-header">Cart Summary</h4>
                              <div class="card-body">
                                  <div class="delivery-dropdown">
                                      <p>
                                          <button class="btn btn-primary btn-xlg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                              Add Delivery Details <i class="fas fa-caret-down"></i>
                                          </button>
                                      </p>
                                      <div class="collapse" id="collapseExample">
                                          <p>Enter your location to get a delivery estimate.</p>
                                          <form>
                                              <div class="form-group">
                                                  <label for="selectCountry" class="text-uppercase">Country</label>
                                                  <select class="form-control" id="selectCountry">
                                                      <option>Kenya</option>
                                                      <option>Uganda</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="selectLocation">Estate/Location</label>
                                                  <select class="form-control" id="selectLocation">
                                                      <option>CBD</option>
                                                      <option>Westlands</option>
                                                      <option>Parklands</option>
                                                      <option>Kileleshwa</option>
                                                      <option>Kangemi</option>
                                                      <option>Ngo'ng Road</option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                  <label class="text-uppercase">Physical Address/Building</label>
                                                  <input type="text" class="form-control form-control">
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="cart-summary-content">
                                      <h6>
                                          Subtotal
                                          <p class="float-right text-uppercase">Kes. {{Cart::subtotal()}}</p>
                                      </h6>
                                      <div class="clearfix"></div>
                                      <h6>
                                          Delivery
                                          <p class="float-right text-uppercase">Kes. 0.00</p>
                                      </h6>
                                      <div class="clearfix"></div>
                                      <h6>
                                          Tax (12%)
                                          <p class="float-right text-uppercase">Kes. {{Cart::tax()}}</p>
                                      </h6>
                                  </div>
                                  <hr>
                                  <h4>
                                      Order Total <strong class="text-uppercase pl-4">Kes. {{Cart::total()}}</strong>
                                  </h4>
                                  <hr>
                                  <button class="btn btn-secondary btn-xlg text-uppercase">Proceed To Checkout</button>
                                  <div class="py-3 text-center">
                                      <i class="fas fa-lock"></i>
                                      <p class="text-uppercase">Safe &amp; Secure</p>
                                  </div>
                              </div>
                          </div>
                      </div> <!---- /. Cart Summary -->
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