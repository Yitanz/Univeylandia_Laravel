<nav class="navbar navbar-expand-sm py-0">
<div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
  <ul class="navbar-nav">

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Idioma      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="#">ES</a></li>
        <li><a class="dropdown-item" href="#">CA</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/img/mapa_parc.jpg">Mapa</a>
    </li>
    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Registre') }}</a>
      </li>
      @endif
    @else
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nom }} {{ Auth::user()->cognom1 }}</a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="#">Perfil</a></li>

        <li>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </li>
    @endguest
  <li>
    <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='/cistella/clases/carrito.php'">
      <img src="/img/carrito.png">
    </button>
  </li>
  </ul>
</div>
</nav>