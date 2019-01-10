<nav class="navbar navbar-expand-sm bg-dark navbar-dark py-4">
  <a class="navbar-brand" href="{{URL::route('inici')}}">Univeylandia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Parc      </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{URL::route('noticies')}}">Noticies</a></li>
          <li><a class="dropdown-item" href="{{URL::route('promocions')}}">Promocions</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::route('atraccions')}}">Atraccions</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hotel      </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{URL::route('habitacions')}}">Habitacions</a></li>
          <li><a class="dropdown-item" href="{{URL::route('restaurant')}}">Restaurant</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Entrades      </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{URL::route('parc')}}">Parc</a></li>
          <li><a class="dropdown-item" href="{{URL::route('parc')}}">Parc+Hotel</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
