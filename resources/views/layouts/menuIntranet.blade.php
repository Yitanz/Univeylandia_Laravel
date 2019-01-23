<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 bg-light sidebar collapse show" id="sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{URL::route('gestio')}}">
              <span data-feather="home"></span>
              Inici
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " data-toggle="collapse" aria-expanded="false" href="#submenu0">
              <span data-feather="users"></span>
              Gestionar Empleats
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse" id="submenu0" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior " href="{{URL::route('inserirEmpleats')}}"><span data-feather="user-plus"></span>Crear Empleat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('gestioEmpleats')}}"><span data-feather="file-text"></span>Gestionar Empleats</a>
            </li>
            </li>
          </ul>

          <li class="nav-item">
            <a class="nav-link " data-toggle="collapse" aria-expanded="false" href="#submenu1">
              <span data-feather="users"></span>
              Gestionar Clients
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse" id="submenu1" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('inserirClients')}}"><span data-feather="user-plus"></span>Crear Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('gestioClients')}}"><span data-feather="file-text"></span>Gestionar Clients</a>
            </li>
          </ul>

          <li class="nav-item">
            <a class="nav-link active" data-toggle="collapse" aria-expanded="true" href="#submenu3">
              <span data-feather="trending-down"></span>
              Gestionar Atraccions
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse show" id="submenu3" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('inserirAtraccions')}}"><span data-feather="plus-square"></span>Crear Atracció</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior active" href="{{URL::route('gestioAtraccions')}}"><span data-feather="file-text"></span>Gestionar Atraccions</a>
            </li>
          </ul>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu4">
              <span data-feather="briefcase"></span>
              Gestionar Hotel
              <span data-feather="chevron-right"></span>
            </a>
          </li>
          <ul class="nav flex-column collapse" id="submenu4" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu1">
                <span data-feather="star"></span>
                Gestionar Habitacions
                <span data-feather="chevron-right"></span>
              </a>
            </li>

              <ul class="nav flex-column collapse" id="sub-submenu1" data-parent="#submenu4">
                <li class="nav-item">
                  <a class="nav-link nav-interior2" href="#"><span data-feather="star"></span>Inserir Habitacions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior2"  href="#"><span data-feather="star"></span>Gestionar Habitacions</a>
                </li>
              </ul>

            <li class="nav-item">
              <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu3">
                <span data-feather="book-open"></span>
                Gestionar Reserves Habitacions
                <span data-feather="chevron-right"></span>
              </a>
            </li>

            <ul class="nav flex-column collapse" id="sub-submenu3" data-parent="#submenu4">
                <li class="nav-item">
                  <a class="nav-link nav-interior2"  href="#"><span data-feather="star"></span>Inserir Reserva Hab</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior2" href="#"><span data-feather="star"></span>Gestionar Reserva Hab</a>
                </li>
            </ul>

            <li class="nav-item">
              <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu2">
                <span data-feather="coffee"></span>
                Gestionar Restaurant
                <span data-feather="chevron-right"></span>
              </a>
            </li>

            <ul class="nav flex-column collapse" id="sub-submenu2" data-parent="#submenu4">
              <li class="nav-item">
                <a class="nav-link nav-interior2" href="#"><span data-feather="star"></span>Inserir Taula</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-interior2" href="#"><span data-feather="star"></span>Gestionar Taula</a>
              </li>
            </ul>

            <li class="nav-item">
              <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu4">
                <span data-feather="book-open"></span>
                Gestionar Reserves Restaurant
                <span data-feather="chevron-right"></span>
              </a>
            </li>

            <ul class="nav flex-column collapse" id="sub-submenu4" data-parent="#submenu4">
                <li class="nav-item">
                  <a class="nav-link nav-interior2" href="#"><span data-feather="star"></span>Inserir Reserva Taula</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-interior2" href="#"><span data-feather="star"></span>Gestionar Reserva Taula</a>
                </li>
            </ul>
            </ul>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu5">
              <span data-feather="alert-triangle"></span>
              Gestionar Incidències
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse" id="submenu5" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('inserirIncidencia')}}"><span data-feather="plus-square"></span>Crear Inicidència</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-interior" href="{{URL::route('gestioIncidencia')}}"><span data-feather="file-text"></span>Gestionar Inicidències</a>
            </li>
          </ul>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" aria-expanded="false" href="#submenu6">
              <span data-feather="truck"></span>
              Gestionar Serveis
              <span data-feather="chevron-right"></span>
            </a>
          </li>

          <ul class="nav flex-column collapse" id="submenu6" data-parent="#sidebar">
            <li class="nav-item">
              <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu4">
                <span data-feather="trash-2"></span>
                Gestionar Neteja
                <span data-feather="chevron-right"></span>
              </a>
            </li>
            <ul class="nav flex-column collapse" id="sub-submenu4" data-parent="#submenu6">
              <li class="nav-item">
                <a class="nav-link nav-interior2" href="#"><span data-feather="plus-square"></span>Crear Tasca Neteja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-interior2" href="#"><span data-feather="file-text"></span>Gestionar Tasques Neteja</a>
              </li>
            </ul>

            <li class="nav-item">
              <a class="nav-link nav-interior" data-toggle="collapse" aria-expanded="false" href="#sub-submenu5">
                <span data-feather="settings"></span>
                Gestionar Manteniment
                <span data-feather="chevron-right"></span>
              </a>
            </li>
            <ul class="nav flex-column collapse" id="sub-submenu5" data-parent="#submenu6">
              <li class="nav-item">
                <a class="nav-link nav-interior2" href="#"><span data-feather="plus-square"></span>Crear Tasca Manteniment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-interior2" href="#"><span data-feather="file-text"></span>Gestionar Tasques Manteniment</a>
              </li>
            </ul>
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
