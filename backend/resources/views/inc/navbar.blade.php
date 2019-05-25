  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Shekesta</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/about') }}">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ url('/services') }}">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
                <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/shop') }}">Gifts</a>
                  <a class="dropdown-item" href="{{ url('/shop') }}">Food &amp; Drinks</a>
                  <a class="dropdown-item" href="{{ url('/shop') }}">Alcoholic Beverages</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('/shop') }}">Courier Services</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/contact') }}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/cart') }}"><i class="fa fa-2x fa-shopping-cart"></i></a>
              </li>
            </ul>
        </div>
    </div>
</nav>