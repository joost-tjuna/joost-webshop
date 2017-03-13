<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Tjuna</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link @if(Request::is('/')) active @endif" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('products')) active @endif" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('about-us')) active @endif" href="/about-us">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('contact')) active @endif" href="/contact">Contact</a>
          </li>
          @if (Route::has('login'))
              <ul class="navbar-nav mr-auto login">
                @if (Auth::check())
                  <li>
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                  </li>
                @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                  </li>
                @endif
              </ul>
          @endif
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>