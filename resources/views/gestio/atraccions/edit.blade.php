@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="card uper">
  <div class="card-header">
    Modificar Atraccions
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('atraccions.update', $atraccio->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nom:</label>
          <input type="text" class="form-control" name="nom" value={{ $atraccio->nom_atraccio }} />
        </div>
        <div class="form-group">
          <label for="price">Altura minima :</label>
        </div>
          <input type="text" class="form-control" name="alturamin" value={{ $atraccio->altura_min }} />
        <div class="form-group">
          <label for="quantity">Altura maxima:</label>
          <input type="text" class="form-control" name="alturamax" value={{ $atraccio->altura_max}} />
        </div>
        <div class="form-group">
          <label for="quantity">Data d'ignauguracio:</label>
          <input type="date" class="form-control" name="datainauguracio" value={{ $atraccio->data_inauguracio }} />
        </div>
        <div class="form-group">
            <label for="quantity">Tipus d'atraccio:</label>
          <select class="form-control form-control-sm" name="tipusatraccio">
            @foreach($tipus as $tipo)
            @if($atraccio->tipus_atraccio == $tipo->id)
              <option selected value="{{ $tipo->id }}">{{ $tipo->tipus }}</option>
            @else
              <option value="{{ $tipo->id }}">{{ $tipo->tipus }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="quantity">Accessible:</label>
          <select class="form-control form-control-sm" name="accessible" value={{ $atraccio->accessibilitat }}>
            @if($atraccio->accessibilitat == 1)
            <option selected value=1> SI</option>
            <option value=0> NO</option>
            @else
            <option selected value=0> NO</option>
            <option value=1> SI</option>
            @endif
          </select>

        </div>
        <div class="form-group">
          <label for="quantity">Acces express:</label>
          <select class="form-control form-control-sm" name="accesexpress" value={{ $atraccio->acces_express }}>
            @if($atraccio->acces_express == 1)
            <option selected value=1> SI</option>
            <option value=0> NO</option>
            @else
            <option selected value=0> NO</option>
            <option value=1> SI</option>
            @endif
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
  </div>
</div>

@endsection
