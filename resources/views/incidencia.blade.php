@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("body")
<div class="container jumbotron mt-3">
  <div class="row">
      <div class="col-sm-12">
        <h3 class="font-weight-bold text-center text-uppercase">reportar una incidència</h3>
      </div>
  </div>

  <form method="POST" action="{{ route('incidencies.store') }}" class="align-items-center justify-content-center d-flex">
    <div class="col-sm-12">
      <div class="form-group">
        <label for="title">Títol</label>
        <input type="text" class="form-control" name="title" id="title" required>
      </div>
      <div class="form-group">
        <label for="description">Missatge</label>
        <textarea type="text" class="form-control" style="resize:none" name="description" rows="5" required></textarea>
      </div>
      <div class="col-md-6 mb-3">
              <label for="priority">Prioritat</label>
              <select class="form-control form-control-sm" name="priority">
              @foreach ($prioritats as $prioritat)
                <option value=" {{ $prioritat->id }}">{{ $prioritat->nom_prioritat }}</option>
              @endforeach
              </select>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>

@endsection

@section("footer")
@endsection