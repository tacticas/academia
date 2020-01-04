@extends('layouts.app')

@section('content')


<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <!--<li data-target="#slides" data-slide-to="2"></li>-->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/background.png" alt="First slide">
        <div class="carousel-caption">
            <h1 class="display-2">EH Academy</h1>
            <h3>La escuela del invocador</h3>
            <button type="button" class="btn btn-primary btn-lg">Ser Estudiante</button>
            <button type="button" class="btn btn-danger btn-lg">Ser Coach</button>
        </div>
      </div>
     <div class="carousel-item">
        <img src="img/background2.png" alt="Second slide">
        <div class="carousel-caption">
            <h1 class="display-2">EH Academy</h1>
            <h3>La escuela del invocador</h3>
            <button type="button" class="btn btn-primary btn-lg">Ser Estudiante</button>
            <button type="button" class="btn btn-danger btn-lg">Ser Coach</button>
        </div>
      </div>
  
    </div>
  
  </div>
  
  <!--- Jumbotron -->
  <div class="container-fluid">
      <div class="row jumbotron">
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
              <p class="lead">EloHell Academy es una plataforma para encontrar a tu coach ideal en League of Legends, o si quieres aportar tu conocimiento y ganar dinero, puedes ser Coach.</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
              <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg" >Ver mas..</button></a>
          </div> 
      </div>
  </div>
  
  <!--- Welcome Section -->
  <div class="container-fluid padding">
      <div class="row welcome text-center">
          <div class="col-12">
              <h1 class="display-4">¿Cómo Funciona?</h1>
          </div>
          <hr>
          <div class="col-12">
              <p class="lead">Encontrar tu Coach ideal de LOL es tan facil como seguir estos 3 pasos.</p>
          </div>
      </div>
  </div>
  
  <!--- Three Column Section -->
  <div class="container-fluid padding">
      <div class="row text-center padding">
          <div class="col-xs-12 col-sm-6 col-md-4">
              <i class="fas fa-address-card"></i>
              <h3>1. Te Registras</h3>
              <p>Llenas el formulario con tus datos de invocador.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <i class="fas fa-search"></i>
              <h3>2. Elijes tu Coach</h3>
              <p>Pueses fialtrar a los Coach por su División, Rol o Reputación. </p>
          </div>
          <div class="col-sm-12 col-md-4">
              <i class="far fa-calendar-check"></i>
              <h3>3. Agendas La Clase</h3>
              <p>Seleccionas el día y la hora </p>
          </div>
      </div>
      <hr class="my-4">
  </div>
  
  <!--- Two Column Section -->
  <div class="container-fluid padding">
      <div class="row padding">
          <div class="text-center col-lg-6">
              <h2>Datos Curiosos</h2>
              <div class="row text-center padding">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                      <span class="datos">1240</span>
                      <h3>Estudiantes</h3>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                      <span class="datos">108</span>
                      <h3>Coachs</h3>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                      <span class="datos">2357</span>
                      <h3>Clases Impartidas</h3>
                  </div>
                   <div class="col-xs-12 col-sm-6 col-md-6">
                      <span class="datos">750</span>
                      <h3>Divisiones Subidas</h3>
                  </div>
              </div>  
          </div>
          <div class="col-lg-6">
              <img src="img/desk.png" class="img-fluid" alt="">
          </div>
      </div>
  </div>
  <hr class="my-4">
  <!--- Fixed background -->
      
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/mac.png" alt="First slide">
        <div class="carousel-caption">
            <h1 class="texto-blanco display-2"><a href="#">eloBlog</a></h1>
            </div>
      </div>
    </div>
   
  
  <!--- Emoji Section -->
  
    
  <!--- Meet the team -->
  <div class="container-fluid padding">
      <div class="row welcome text-center">
          <div class="col-12">
              <h1 class="display-4">Algunos de Nuestro Coach</h1>
          </div>
          <hr>
      </div>
  </div>
  
  <!--- Cards -->
  <div class="container-fluid padding">
      <div class="row padding">
          <div class="col-md-3">
              <div class="card">
                  <img src="img/team1.png" alt="" class="card-img-top">
                  <div class="card-body">
                      <h4 class="card-title">Summoner</h4>
                      <div class="ec-stars-wrapper">
                          <span class="up ec-stars-wrapper"  data-value="1" title="Votar con 1 estrellas">&#9733;</span>
                          <span class="up" data-value="2" title="Votar con 2 estrellas">&#9733;</span>
                          <span class="up" href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</span>
                          <span class="up" data-value="4" title="Votar con 4 estrellas">&#9733;</span>
                          <span  class="down" data-value="5" title="Votar con 5 estrellas">&#9733;</span>><span class="badge badge-light">4.5</span><span class="badge badge-pill badge-secondary">admin</span>
                      </div>
                      <p class="font-weight-bold">Superior / Inferior</p>  
                      <p class="card-text">quorum commodo duis veniam illum doctrina singulis possumus amet varias</p>
                      <a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card c-pro">
                  <img src="img/team2.png" alt="" class="card-img-top">
                  <div class="card-body">
                      <h4 class="card-title">Summoner</h4>
                      <div class="ec-stars-wrapper">
                          <span class="up ec-stars-wrapper"  data-value="1" title="Votar con 1 estrellas">&#9733;</span>
                          <span class="up" data-value="2" title="Votar con 2 estrellas">&#9733;</span>
                          <span class="up" href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</span>
                          <span class="up" data-value="4" title="Votar con 4 estrellas">&#9733;</span>
                          <span  class="down" data-value="5" title="Votar con 5 estrellas">&#9733;</span>><span class="badge badge-light">4.5</span><span class="badge badge-pill badge-danger">HellCoach</span>
                      </div> 
                      <p class="font-weight-bold">Central / Superior</p> 
                      <p class="card-text">quorum commodo duis veniam illum doctrina singulis possumus amet varias</p>
                      <a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card">
                  <img src="img/team3.png" alt="" class="card-img-top">
                  <div class="card-body">
                      <h4 class="card-title">Summoner</h4>
                      <div class="ec-stars-wrapper">
                      <span class="up ec-stars-wrapper"  data-value="1" title="Votar con 1 estrellas">&#9733;</span>
                      <span class="up" data-value="2" title="Votar con 2 estrellas">&#9733;</span>
                      <span class="up" href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</span>
                      <span class="up" data-value="4" title="Votar con 4 estrellas">&#9733;</span>
                      <span  class="down" data-value="5" title="Votar con 5 estrellas">&#9733;</span>><span class="badge badge-light">4.5</span><span class="badge badge-pill badge-primary ">Pro</span>
                  </div>  
                                  
                      <p class="font-weight-bold">Jungla / Central</p> 
                      <p class="card-text">quorum commodo duis veniam illum doctrina singulis possumus amet varias</p>
                      <a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card">
                  <img src="img/card_plata.png" alt="" class="card-img-top">
                  <div class="card-body">
                      <h4 class="card-title">Summoner</h4>
                      <div class="ec-stars-wrapper">
                          <span class="up ec-stars-wrapper"  data-value="1" title="Votar con 1 estrellas">&#9733;</span>
                          <span class="up" data-value="2" title="Votar con 2 estrellas">&#9733;</span>
                          <span class="up" href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</span>
                          <span class="up" data-value="4" title="Votar con 4 estrellas">&#9733;</span>
                          <span  class="down" data-value="5" title="Votar con 5 estrellas">&#9733;</span>><span class="badge badge-light">4.5</span><span class="badge badge-pill badge-secondary">Nuevo</span>
                      </div> 
                      <p class="font-weight-bold">Soporte</p> 
                      <p class="card-text">quorum commodo duis veniam illum doctrina singulis possumus amet varias</p>
                      <a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!--- Two Column Section -->
  <div class="container-fluid padding">
      <div class="row padding">
          <div class="col-lg-6">
              <h2>Conviertete en Coach</h2>
              <p>Registrate como Coach y pertenece  al grupo de los que ayudan a quien mas lo necesita, transmite toda tu experiencia y conocimiento del campo de batalla.</p>
                  <p>Recibe veneficios económicos por cada clase si así lo deseas, ve acumulando buenas reseñas y puntuaciones, para que tengas más estudiantes y se el Mejor Coach de Lol.</p>
                  <br>
                  <a href="#" class="btn btn-danger">¿Dónde Firmo?</a>
          </div>
          <div class="col-lg-6">
              <img src="img/bootstrap2.png" class="img-fluid" alt="">
          </div>
      </div>
  <hr class="my-4">
  </div>
  
  
  <!--- Connect -->
  <div class="container-fluid padding">
      <div class="row text-center padding">
          <div class="col-12">
              <h2>Únete</h2>
          </div>
          <div class="col-12 social padding">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          
      </div>
  </div>

@endsection


