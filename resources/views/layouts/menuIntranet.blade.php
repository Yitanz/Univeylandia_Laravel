<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 bg-light sidebar collapse show" id="sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('gestio') ? 'active' : '' }}" href="{{URL::route('gestio')}}">
              <span data-feather="home"></span>
              Inici
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('empleats*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('empleats*') ? 'true' : 'false' }}" href="#submenu0">
              <span data-feather="users"></span>
              Gestionar Empleats
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse {{ request()->routeIs('empleats*') ? 'show' : '' }}" id="submenu0" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('empleats.create') ? 'active' : '' }}" href="{{URL::route('empleats.create')}}"><span data-feather="user-plus"></span>Crear Empleat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('empleats.index') ? 'active' : '' }}" href="{{URL::route('empleats.index')}}"><span data-feather="file-text"></span>Gestionar Empleats</a>
            </li>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('inserirClients') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('inserirClients') ? 'true' : 'false' }}" href="#submenu1">
              <span data-feather="users"></span>
              Gestionar Clients
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse {{ request()->routeIs('inserirClients') ? 'show' : '' }}" id="submenu1" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('inserirClients') ? 'active' : '' }}" href="{{URL::route('inserirClients')}}"><span data-feather="user-plus"></span>Crear Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('gestioClients') ? 'active' : '' }}" href="{{URL::route('gestioClients')}}"><span data-feather="file-text"></span>Gestionar Clients</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link " data-toggle="collapse" aria-expanded="false" href="#submenu3">
              <span data-feather="trending-down"></span>
              Gestionar Atraccions
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse " id="submenu3" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior " href="#"><span data-feather="plus-square"></span>Crear Atracció</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior " href="#"><span data-feather="file-text"></span>Gestionar Atraccions</a>
            </li>
          </ul>
          

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('incidencies*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('incidencies*') ? 'true' : 'false' }}" href="#submenu5">
              <span data-feather="alert-triangle"></span>
              Gestionar Incidències
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse {{ request()->routeIs('incidencies*') ? 'show' : '' }}" id="submenu5" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('incidencies.create') ? 'active' : '' }}" href="{{URL::route('incidencies.create')}}"><span data-feather="plus-square"></span>Crear Inicidència</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('incidencies.index') ? 'active' : '' }}" href="{{URL::route('incidencies.index')}}"><span data-feather="file-text"></span>Gestionar Inicidències</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('serveis*') ? 'active' : '' }}" data-toggle="collapse" aria-expanded="{{ request()->routeIs('serveis*') ? 'true' : 'false' }}" href="#submenu6">
              <span data-feather="truck"></span>
              Gestionar Serveis
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse {{ request()->routeIs('serveis*') ? 'show' : '' }}" id="submenu5" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('serveis.create') ? 'active' : '' }}" href="{{URL::route('serveis.create')}}"><span data-feather="plus-square"></span>Crear Servei</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior {{ request()->routeIs('serveis.index') ? 'active' : '' }}" href="{{URL::route('serveis.index')}}"><span data-feather="file-text"></span>Gestionar Serveis</a>
            </li>
          </ul>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu9">
              <span data-feather="alert-triangle"></span>
              Gestionar Noticies
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse" id="submenu9" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('inserirNoticia')}}"><span data-feather="user-plus"></span>Crear Noticia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('gestioNoticies')}}"><span data-feather="file-text"></span>Gestionar Noticia</a>
            </li>
          </ul>
        </ul>
      </div>
    </nav>
