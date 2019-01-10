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
      <img class="d-block w-100" src="/img/restaurant.jpg" alt="First slide" style="height:100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/restaurant2.jpg" alt="Second slide" style="height:100%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/restaurant3.jpg" alt="Third slide" style="height:100%">
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
<div class="container">
<div class="row p-3 mb-2 bg-light text-dark">
  <div class="col-sm-5 py-5 px-5">
        <img src="/img/restaurantdiv.jpg" style="width:100%" >
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
  <div class="col-sm-5 py-5 px-5">
        <img src="/img/paella.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
    <h1>Menú de temporada</h1>

    <ul class="list-unstyled">
      <li>Detalls del Menu:
        <ul>
          <li>Amanida de guatlla escabetxada amb pasta i magrana</li>
          <li>Caneló de pollastre de pagès rostit amb bolets de temporada</li>
          <li>Arròs sec de rap i calamar</li>
          <li>Tonyina a la brasa amb fruita i sal de bacallà</li>
          <li>Magret d’ànec rostit amb fruita dolça</li>
          <li>El nostre carro de pastissos artesanals</li>
        </ul>
      </li>
    </ul>

      <p>
        Només per taula sencera. Avís per a les persones amb al·lèrgies o intoleràncies, consultin al nostre personal per tal que els puguem informar.
      </p>
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Reserva ja
    </button>
  </div>
</div>
<div class="container">
<div class="row p-3 mb-2 bg-light text-dark">
  <div class="col-sm-5 py-5 px-5">
        <img src="/img/calamar.jpg" style="width:100%" >
  </div>
  <div class="col-sm-7 py-5 px-5">
    <h1>La nostra Carta</h1>

    <ul class="list-unstyled">
      <li>Per picar:
        <ul>
          <li>Coca de forner amb tomàquet, sal i oli d’oliva verge 4 €</li>
          <li>La nostra “Gilda” de bacallà 6 €a</li>
          <li>Les millors olives farcides d’anxova 8 €</li>
          <li>Llonganissa de Vic 12 €</li>
          <li>Pernil ibèric tallat a mà Joselito Gran Reserva 28 €</li>
          <li>Anxoves de l’Escala  3’5 €/unitat</li>
          <li>Ensaladilla de ventresca de tonyina 13 €</li>
          <li>Bunyols de bacallà  3 €/unitat</li>
          <li>Sobrassada de Can Rovira amb mel i coca de forner amb tomàquet 9€</li>
          <li>Croquetes de pernil 2’5 €/unitat</li>
          <li>Gambetes a la sal  23 €</li>
          <li>Calamars enfarinats 18 €</li>
        </ul>
      </li>
    </ul>
      <p>
        Només per taula sencera. Avís per a les persones amb al·lèrgies o intoleràncies, consultin al nostre personal per tal que els puguem informar.
      </p>
      <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
        Reserva ja
    </button>
  </div>
</div>
</div>
</div>
@endsection
@section("footer")
@endsection
