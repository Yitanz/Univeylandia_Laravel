@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("body")
<!-- SLIDER-->
<div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Prèvia</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Següent</span>
  </a>
</div>
<!-- FI SLIDER -->

<!-- PROMOCIONS -->
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center">TOP PROMOCIONS 2018-2019</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <img src="/img/promocions/promocio1.jpg" class="img-fluid" alt="Responsive image">
    </div>
  </div>
</div>
<!-- FI PROMOCIONS -->

<!-- NOTICIES -->
<div class="container mt-3">

  <div class="row">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center text-uppercase">noticies</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Hotel</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Noves habitacions</a>
          </h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#">Continuar llegint</a>
        </div>
      <img class="card-img-right flex-auto d-none d-md-block" alt="Imatge noticia" style="width: 200px; height: 250px;" src="/img/slider1.jpg">
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Atraccions</strong>
        <h3 class="mb-0">
          <a class="text-dark" href="#">Post title</a>
        </h3>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#">Continue reading</a>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" alt="Imatge noticia" style="width: 200px; height: 250px;" src="/img/slider1.jpg">
    </div>
  </div>
  
</div>
<!-- FI NOTICIES -->

<!-- LOCALITZA -->
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center">ON ESTEM?</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <iframe title="Localitzacio del parc"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192184.82159763432!2d1.129910761830178!3d41.180613533420534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe10dd3fa1290f47!2sTANATORI+RIOS+HEVIA!5e0!3m2!1sca!2ses!4v1541009987889" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>    
      </div>
    </div>
  </div>
</div>
<!-- FI LOCALITZA -->

<!-- CONTACTE -->
<div class="container jumbotron mt-3">
  <div class="row">
      <div class="col-sm-12">
        <h3 class="font-weight-bold text-center text-uppercase">Formulari de contacte</h3>
      </div>
    </div>
      <form class="align-items-center justify-content-center d-flex">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" id="exampleInputText1" placeholder="Nom" required>
          </div>
          <div class="form-group">
            <label>Primer cognom</label>
            <input type="text" class="form-control" id="exampleInputText1" placeholder="Primer cognom" required>
          </div>
          <div class="form-group">
            <label>Segon cognom</label>
            <input type="text" class="form-control" id="exampleInputText1" placeholder="Segon cognom">
          </div>
          <div class="form-group">
            <label>Número de telèfon</label>
            <input type="number" class="form-control" id="exampleInputText1" placeholder="Número de telèfon" >
          </div>
          <div class="form-group">
            <label>Adreça de correu electrònic</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriu el teu email" required>
            <small id="emailHelp" class="form-text text-muted">No compartirem el teu email amb ningú.</small>
          </div>
          <div class="form-group">
            <label>Missatge</label>
            <textarea type="text" class="form-control" id="exampleInputText1" placeholder="Escriu el teu missatge..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envia</button>
      </form>
    </div>
    </div>
  </div>
</div>
<!--  FI CONTACTA -->

@endsection
@section("footer")
@endsection