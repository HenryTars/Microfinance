<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/Microfinance/public/index" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4"><b>KUWA Microfince Co. LTD</b></span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ url('index') }}" class="{{Request::is('index') ? 'nav-link active' : 'nav-link'}}" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ url('huduma') }}" class="{{Request::is('huduma') ? 'nav-link active' : 'nav-link'}}">Service</a></li>
        <li class="nav-item"><a href="{{ url('fahamu') }}" class="{{Request::is('fahamu') ? 'nav-link active' : 'nav-link'}}">Contact</a></li>
        @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
          @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">My Account</a></li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                      </form>
                </li>
           </ul>
        </li>
                           
                        @endguest
                        
        <!-- <li class="nav-item"><a href="{{ url('login') }}" class="{{Request::is('login') ? 'nav-link active' : 'nav-link'}}" >Staff Login</a></li> -->
      </ul>
    </header>
  </div>


  