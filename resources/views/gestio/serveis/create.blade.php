@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Registrar Assignacions de Serveis Atraccio-Empleat</h1>
        </div>

        <div class="row">
        <div class="col-md-4">
          <div class="col-md-12 px-4">
            <h4 class="h5">Selecciona l'Atracció a assignar</h4>
          </div>
         <form class="needs-validation" method="post" action="{{ route('serveis.store') }}">
           @csrf
           <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nom</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
          <tbody>
            <tr>
              <th scope="row">$row["id_atraccio"]</th>
              <td>$row["nom_atraccio"]</td>
              <td><input type="radio" class="form-check-input" name="seleccio_atraccio" value="'.$id_atraccio.'"></td>
            </tr>
          </tbody>


        </table>
        <br/>
        <input class="form-control" type="date" name="data_inici_assign">
        <br/>
        <input class="form-control" type="date" name="data_fi_assign">
        <br/>
        <br/>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nom Servei</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              <tr>
              <th scope="row">'.$row["nom_servei"].'</th>
              <td><input type="radio" class="form-check-input" name="nom_servei" value="'.$id_servei.'"></td>
              </tr>
          </tbody>
        </table>
        </div>

        <div class="col-md-1">
        </div>

        <div class="col-md-4">
          <div class="col-md-12 px-4">
            <h4 class="h5">Selecciona l'Empleat a assignar</h4>
          </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Cog 1</th>
                <th scope="col">Cog 2</th>
                <th scope="col">DNI</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">'.$row["id_usuari"].'</th>
                <td>'.$row["nom"].'</td>
                <td>'.$row["cognom1"].'</td>
                <td>'.$row["cognom2"].'</td>
                <td>'.$row["numero_document"].'</td>
                <td><input type="checkbox" class="form-check-input" name="seleccio_empleat[]" value="'.$id_empleat.'">
                </td>
              </tr>
            </tbody>
      </table>

      <button class="btn btn-primary" type="submit">Crear Assignacio</button>
    </form>





@endsection
