@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Llistar Clients Actius</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">
                  <span data-feather="save"></span>
                  Exportar</button>
              </div>
            </div>
          </div>
          <!--buscador-->
          <form class="form-inline" method="post" action="" id="buscador">
            <div class="form-group mx-sm-3 mb-2">
              <label for="buscador" class="sr-only">Introdueix una paraula</label>
              <input type="text" class="form-control" id="cercador" placeholder="Introdueix una paraula">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Cercar</button>
          </form>

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Primer Cognom</th>
              <th scope="col">Segon Cognom</th>
              <th scope="col">Email</th>
              <th scope="col">Data Naixement</th>
              <th scope="col">Adreça</th>
              <th scope="col">Ciutat</th>
              <th scope="col">Provincia</th>
              <th scope="col">Codi Postal</th>
              <th scope="col">Tipus Document</th>
              <th scope="col">Numero Document</th>
              <th scope="col">Sexe</th>
              <th scope="col">telefon</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($usuaris as $usuari)
          <tr>
              <td>{{$usuari->nom}}</td>
              <td>{{$usuari->cognom}}</td>
              <td>{{$usuari->cognom2}}</td>
              <td>{{$usuari->email}}</td>
              <td>{{$usuari->dataNaixement}}</td>
              <td>{{$usuari->adreca}}</td>
              <td>{{$usuari->ciutat}}</td>
              <td>{{$usuari->provincia}}</td>
              <td>{{$usuari->codiPostal}}</td>
              <td>{{$usuari->tipusDocument}}</td>
              <td>{{$usuari->numeroDocument}}</td>
              <td>{{$usuari->sexe}}</td>
              <td>{{$usuari->telefon}}</td>
              <td><button type="button" class="btn btn-danger">Eliminar</button></td>
              <td><button type="button" class="btn btn-success">Modificar</button></td>
          </tr>
          @endforeach
          </tbody>
        </table>
        </main>
@endsection
