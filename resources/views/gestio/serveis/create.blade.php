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
           <table class="table">;
              <thead>;
                <tr>;
                  <th scope="col">ID</th>;
                  <th scope="col">Nom</th>;
                  <th scope="col"></th>;
                  <th scope="col"></th>;
                </tr>;
              </thead>;
          <tbody>';
            <tr>';
              <th scope="row">$row["id_atraccio"]</th>;
              <td>$row["nom_atraccio"]</td>;
              <td><input type="radio" class="form-check-input" name="seleccio_atraccio" value="'.$id_atraccio.'"></td>;
            </tr>;
          </tbody>;

    }

                //    echo '</form>';
  }

      echo '</table>';

@endsection
