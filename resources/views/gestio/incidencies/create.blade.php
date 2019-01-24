@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Crear Incidència</h2>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
        @endif
        <form method="post" action="{{ route('incidencies.store') }}">
            @csrf
          <div class="form-group">
            <div class="col-md-6 mb-3">
              <label for="title">Títol</label>
              <input type="text" class="form-control form-control-sm" name="title" required>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="description">Descripció</label>
                <textarea class="form-control form-control-sm" name="description" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="priority">Prioritat</label>
              <select class="form-control form-control-sm" name="priority">
                <option value="Baixa">Baixa</option>
                <option value="Mitja">Mitja</option>
                <option value="Alta">Alta</option>
              </select>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Crear</button>
          <button class="btn btn-secondary" type="reset">Cancel·lar</button>
        </form>

      </main>

@endsection
