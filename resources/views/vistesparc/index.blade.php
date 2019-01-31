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
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FI SLIDER -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center text-uppercase">top promocions 2018-2019</1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <img src="/img/promocions/promocio1.jpg" class="img-fluid" alt="Responsive image">
    </div>
  </div>
</div>


<!-- NOTICIES -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center text-uppercase">noticies</1>
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
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" style="width: 200px; height: 250px;" src="img/slider1.jpg">
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
        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" style="width: 200px; height: 250px;" src="img/slider1.jpg">
      </div>
  </div>
</div>
<video width="320" height="240" controls>
  <source src="../video/atraccio.mp4" type="video/mp4">
</video>
<audio controls>
  <source src="../video/C.mp3" type="audio/mpeg">
</audio>

<!-- FI NOTICIES -->

<!-- LOCALITZA -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center text-uppercase">on estem?</1>
    </div>
  </div>
    <div class="row">
      <div class="col-sm-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192184.82159763432!2d1.129910761830178!3d41.180613533420534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe10dd3fa1290f47!2sTANATORI+RIOS+HEVIA!5e0!3m2!1sca!2ses!4v1541009987889" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
      </div>
    </div>
</div>
<!-- FI LOCALITZA -->

@endsection
@section("footer")
@endsection
