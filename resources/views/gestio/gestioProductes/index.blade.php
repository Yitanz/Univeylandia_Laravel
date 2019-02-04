@extends("layouts.plantillaGestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <form action="/gestio/productes" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Buscar..."> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                BUSCAR
            </button>
        </span>
    </div>
</form>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Tipus producte</td>
          <td>Mida</td>
          <td>Viatges tickets</td>
          <td>Path foto</td>
          <td>Path foto aigua</td>
          <td>Preu</td>
          <td>Descripcio</td>
          <td>Estat</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($productes as $producte)
        @if ($producte->estat === 0)
        <tr style="color:lightgrey;">
        @else
        <tr>
        @endif
            <td>{{$producte->id}}</td>
            <td>{{$producte->nom}}</td>
            <td>{{$producte->mida}}</td>
            <td>{{$producte->tickets_viatges}}</td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModal{{$producte->id}}">{{$producte->foto_path}}</a></td>
            @if (! is_null($producte->foto_path))
            <!-- MODAL FOTO -->
            <div class="modal fade" id="exampleModal{{$producte->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="width:120%;">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imatge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="{{ asset($producte->foto_path) }}" style="display:block;margin:auto;">
                  </div>
                </div>
              </div>
            </div>
            <!-- FI MODAL FOTO -->
            @else
            @endif
            <td>{{$producte->foto_path_aigua}}</td>
            <td>{{$producte->preu}}</td>
            <td>{{$producte->descripcio}}</td>
            @if ($producte->estat === 1)
            <td>ACTIU</td>
            @else
            <td>DESACTIVAT</td>
            @endif

            <td><a href="{{ route('productes.edit',$producte->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('productes.destroy',$producte->id)}}" method="post" onsubmit="return confirm('Estàs segur de que vols eliminar el producte?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
