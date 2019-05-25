<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shop conviniently online in Nairobi') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Germania+One|Oswald:300" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')
    @yield('content')

    
    <!-- /. Connect  -->
    <section class="bg-gradient-warning py-4" id="connect">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 section-header text-center py-2">
                  <h2>Connect with our Social Marketplace</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 text-center py-3">
                  <ul class="list-inline list-social">
                    <li class="list-inline-item social-twitter">
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item social-facebook">
                      <a href="#">
                        <i class="fab fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item social-instagram">
                      <a href="#">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
      
          <!-- /. Newletter Signup -->
          <section class="bg-light py-5" id="subscribe">
            <div class="container">
                <div class="row">
                  <div class="col-lg-12 section-header text-center py-2">
                    <h2>Sign up for our Newsletters &amp; Promotions</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center py-2">
                    <form>
                      <input type="email" placeholder="Enter Email..." required>
                      <button type="submit" class="btn-subscribe">Subscribe</button>
                    </form>
                  </div>
                </div>
            </div>
          </section>
    
        <!-- /.Footer -->
        <footer id="main-footer" class="bg-dark">
          <div class="col footer-cols">
            <div class="row">
    
              <div class="col-md-3 text-center text-white">
                <ul class="list-inline social-buttons">
                  <li>Follow Us</li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
    
              <div class="col-md-3">
                  <ul>
                      <li>Join Us</li>
                      <li>
                        <a href="#">Find a Store</a>
                      </li>
                      <li>
                        <a href="#">Our Vendors</a>
                      </li>
                      <li>
                        <a href="#">Our Partners</a>
                      </li>
                      <li>
                        <a href="#">Vendor Login</a>
                      </li>
                      <li>
                        <a href="#">Jobs</a>
                      </li>
                  </ul>
              </div>
              <div class="col-md-3">
                  <ul>
                      <li>Help</li>
                      <li>
                        <a href="#">How to Shop</a>
                      </li>
                      <li>
                        <a href="#">About us</a>
                      </li>
                      <li>
                        <a href="#">FAQ's</a>
                      </li>
                    </ul>
              </div>
              <div class="col-md-3">
                  <ul>
                      <li>Legal</li>
                      <li>
                        <a href="#">Privacy Policy</a>
                      </li>
                      <li>
                        <a href="#">Terms &amp; Conditions</a>
                      </li>
                    </ul>
              </div>
            </div>
          </div>
          <div class="col footer-bottom text-center">
              Copyright &copy; 2019 Comp Name
          </div>
        </footer>
    
    
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
      <!-- Core plugin JavaScript-->
      <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    
      <!-- Main Js -->
      <script src="{{ asset('js/main.js') }}" defer></script>
    
    </body>
    
</html>