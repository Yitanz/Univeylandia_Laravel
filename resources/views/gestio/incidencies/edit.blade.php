@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Editar Incidència: {{ $incidencia->titol }}</h2>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('incidencies.update', $incidencia->id) }}">
            @method('PATCH')
            @csrf
          <div class="form-group">
            <div class="col-md-6 mb-3">
              <label for="title">Títol</label>
              <input type="text" class="form-control form-control-sm" name="title" value="{{ $incidencia->titol }}" readonly>
            </div>
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="description">Descripció</label>
                <textarea class="form-control form-control-sm" style="resize:none" name="description" rows="3" readonly>{{ $incidencia->descripcio }}</textarea>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="priority">Prioritat</label>
              <select class="form-control form-control-sm" name="priority">
              @foreach ($prioritats as $prioritat)
                @if ($incidencia->id_prioritat == $prioritat->id)
                <option selected value="{{ $incidencia->id_prioritat }}">{{ $prioritat->nom_prioritat }}</option>
                @else
                <option value="{{ $prioritat->id }}">{{ $prioritat->nom_prioritat }}</option>
                @endif
              @endforeach
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="assigned-employee">Assignar a:</label>
              <select id="employees" name="assigned-employee" class="form-control form-control-sm">
              @foreach ($treballadors as $treballador)
                <option value="{{ $treballador->id }}">{{ $treballador->nom }} {{ $treballador->cognom1 }} {{ $treballador->cognom2 }} {{ $treballador->numero_document }}</option>
              @endforeach
              </select>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Assignar</button>
          <a href="{{ route('incidencies.index') }}" class="btn btn-secondary" type="reset">Cancel·lar</a>
        </form>

      </main>

@endsection
