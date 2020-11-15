<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          Viešbučių rezervacija
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Pagrindinis</a></li>
            <li class="nav-item"><a class="nav-link" href="/clientreservations">Rezervacijos</a></li>
            <li class="nav-item"><a class="nav-link" href="/adminreservations">(Admin)</a></li>
            <li class="nav-item"><a class="nav-link" href="/findreservation">Rezervacijų paieška</a></li>
            <li class="nav-item"><a class="nav-link" href="/findhotel">Viešbučių paieška</a></li>
            <li class="nav-item"><a class="nav-link" href="/hotels">Viešbučiai</a></li>
            <li class="nav-item"><a class="nav-link" href="/reports">Ataskaitos</a></li>
            <li class="nav-item"><a class="nav-link" href="/responses">Atsiliepimai</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                      </li>
                  @endif
                  
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
                      
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                            {{ __('Paskyra') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('user.edit') }}">
                            {{ __('Redaguoti paskyrą') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('user.reservations') }}">
                            {{ __('Peržiūrėti mano rezervacijas') }}
                        </a>
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Atsijungti') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                         
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>