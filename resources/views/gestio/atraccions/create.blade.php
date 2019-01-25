@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Registrar Atraccions</h1>
        </div>

        <form class="needs-validation" method="post" action="{{ route('atraccions.store')}}">
          @csrf
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="nom">Nom de l'Atraccio</label>
              <input type="text" class="form-control form-control-sm" placeholder="Nom" name="nom" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cognom1">Altura minima</label>
              <input type="text" class="form-control form-control-sm" name="alturamin" required>
            </div>
            <div class="col-md-3 mb-3">
              <label >Altura maxima</label>
              <input type="text" class="form-control form-control-sm" name="alturamax">
            </div>
            <div class="col-md-3 mb-3">
              <label>Data d'Innauguracio</label>
              <input type="date" class="form-control form-control-sm" name="datainauguracio">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="nom">Tipus d'atraccio</label>
              <div class="input-group">
                <select class="form-control form-control-sm" name="tipusatraccio">
                  <option value="1">Extrema</option>
                  <option value="2">Mitjana</option>
                  <option value="3">Familiar</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cognom1">Accessibilitat</label>
                <div class="input-group">
                <select class="form-control form-control-sm" name="accessible">
                  <option value="1">SI</option>
                  <option value="0">NO</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cognom2">Acces Express</label>
              <div class="input-group">
                <select class="form-control form-control-sm" name="accesexpress">
                  <option value="1">SI</option>
                  <option value="0">NO</option>
                </select>
              </div>
            </div>
          </div>
            <button class="btn btn-primary" type="submit">Crear</button>
          <button class="btn btn-primary" type="reset">Cancel·lar</button>
        </form>
        <br>
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="exampleFormControlFile1">Pujar arxiu .CSV amb dades de clients</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </div>
          </div>

        </form>

      </main>
    </div>
  </div>

@endsection
