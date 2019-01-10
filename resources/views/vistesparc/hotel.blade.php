@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("body")
<!-- SLIDER-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/hotel.jpg" alt="First slide" style="height:100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/hotel2.jpg" alt="Second slide" style="height:100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/restaurant.jpg" alt="Third slide" style="height:100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- FI SLIDER -->
<div class="container" style=width:100%>
<div class="row p-3 mb-2 bg-light text-darke" >
  <div class="col-sm-5 py-5 px-5">
    <img src="../img/hoteldiv.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
      <p>
        Hotel Univeylandia és un establiment de 4 estrelles convenientment situat a Amposta.
        La recepció està disponible les 24 hores del dia per atendre qualsevol inquietud.
        Els clients que necessitin viatjar desde l'aeroport poden organitzar el transport amb la recepció.
      </p>
      <p>
        Un conserge amable està sempre disposat a ajudar-lo amb qualsevol consulta.
        Les instal·lacions compten amb serveis de neteja en sec.
        Un jacuzzi o una banyera d'hidromassatge està a disposició en les instal·lacions.
      </p>
      <p>
        El servei de bugaderia està disponible amb un cost addicional.
        Podreu trobar una gran selecció de begudes alcohòliques i no alcohòliques al bar de l'hotel.
        El servei d'estacionament amb valet s'ofereix a tots els clients allotjats a l'hotel.
      </p>
      <p>
        L'establiment és per a no fumadors
      </p>
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Reserva ja
    </button>
  </div>
</div>
</div>
<div class="container">
<div class="row p-3 mb-2 bg-light text-dark">
  <div class="col-sm-5 py-5 px-5">
        <img src="../img/restaurantdiv.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
    <p>Gràcies al acollidor i confortable de les seves instal·lacions i la bellesa de la seva ubicació,
      el Restaurant Univeylandia els ofereix la distinció necessària, dins d'un marc ideal, per celebrar el seu banquet de noces,
      comunió, aniversari o qualsevol tipus d'esdeveniment, amb una cuina personalitzada i de temporada.</p>
    <p>
      Disposem d'un menú diari que segur complirà el seu expectatives, de dimarts a divendres, amb un servei atent i personalitzat.
       Així mateix oferim un menú de cap de setmana amb una carta àmplia i variada, de la qual podran gaudir en un ambient còmode i relaxat.
    </p>
    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
      Reserva ja
  </button>
  </div>
</div>
</div>
<div class="container">
  <div class="row p-3 mb-2 bg-light text-dark">
    <div class="col-sm-12">
      <h1 class="font-weight-bold text-center text-uppercase">on estem?</h1>
    </div>
  </div>
    <div class="row p-3 mb-2 bg-light text-dark">
      <div class="col-sm-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192184.82159763432!2d1.129910761830178!3d41.180613533420534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe10dd3fa1290f47!2sTANATORI+RIOS+HEVIA!5e0!3m2!1sca!2ses!4v1541009987889" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
      </div>
    </div>
</div>
<!-- FI NOTICIES -->

<!-- PROMOCIONS -->


@endsection
@section("footer")
@endsection
