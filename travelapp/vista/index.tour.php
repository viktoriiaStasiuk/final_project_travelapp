<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="imagenes/favicont.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="vista/assets/js/funciones.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Travel</title>
    <style type="text/css">
      .slider {background-image: url(imagenes/s14.jpg);
                height: 70vh;
                padding:5vh;
                background-size:cover;
                background-position:center;}
      .titulo-responsivo {font-size:5vw;
                          font-weight:bold;
                          -webkit-text-stroke:0.1vw black;}
      .h1-responsivo {font-size:3vw;}
      .subrayado {border-bottom:5px solid rgb(50,26,4);}
      .visor {height:50vw;}
      .icono-estilo {font-size:4vw;
                     margin:2vw;}
    </style>
  </head>
  <body>
  	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="#" target="_blank"><img src="imagenes/travelvibe.svg" width="150"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#quien">Quiénes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tours">Tours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#donde">Dónde estamos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
<?php
if (!empty($_SESSION) && ($_SESSION["acc"] == 2)){
?>
  <li class="nav-item">
    <a class="nav-link" href="index.php?mod=user&ope=cerrarSesion">Cerrar sesión</a>
  </li>
<?php
} else {
?>

  <li class="nav-item">
    <a class="nav-link" href="vista/registarse.user.php">Registrarse</a> <br/>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vista/login.user.php">Login</a>
  </li>
<?php
}
?>
    </ul>
    </div>
   </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 visor" src="imagenes/vibes.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block"> 
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 visor" src="imagenes/seg.png" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 visor" src="imagenes/ter.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 visor" src="imagenes/cuatro.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 visor" src="imagenes/cinco.jpg" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
   </a>
  </div>
 
<section class="container text-justify mt-5" id="quien">
      <h1 class="text-center p-2 font-weight-bold  w-50 mx-auto m-4 subrayado h1-responsivo" >Quiénes somos</h1>
      <p class="text-center">Somos tu agencia de viajes en Málaga...<br/>
      Travel Vibes está formada por un equipo de agentes de viajes con más de 25 años de experiencia en turismo, desde nuestra creación como agencia de viajes en Málaga hace más 11 años, hemos apostado por la calidad de nuestros servicios, la profesionalidad y el amor por nuestro trabajo, avalado por la satisfacción de nuestros clientes y su confianza hacia nuestra empresa de viajes en la Costa del Sol.</p>
      
      <iframe class="float-left w-50 p-3" width="550" height="270" src="https://www.youtube.com/embed/mJhFtv5UTk8" frameborder="0" allow="autoplay; encrypted-media;" style="border:0" allowfullscreen></iframe>

      <p class="bg-dark text-light  p-3 ">
        En Travel Vibes Málaga, llevamos años apostando por las nuevas tecnologías en Internet, facilitando a todos nuestros clientes reservar sus viajes de manera online desde Málaga y desde cualquier parte del mundo, gracias a ello podemos estar orgullosos de haber asesorado a más de 30.000 viajeros de todas partes de España y de practicamente todos los países de latinoamerica, México, Argentina, Colombia, Chile, Costa Rica y muchos más.
        Gracias al crecimiento, hemos abierto recientemente una oficina en Latinoamerica de atención al cliente para atender a todos nuestros clientes de la mejor manera.
        <br/>
        En Travel Vibes contamos con extensa red de receptivos en todo el mundo nos permite ofrecerle desde Travel Vibes una amplia oferta de posibilidades, un trato individualizado para que su experiencia de viaje sea única.
        En nuestra web podrás reservas todo tipo de servicios, circuitos, hoteles, cruceros, aviones, consultar nuestras ofertas o realizar cualquier tipo de consulta en línea en nuestro chat o whatsapp o bien dejarnos un mensaje, a la cual te contestaremos como máximo en 24 horas.
      </p>
      <p class="text-center">Te esperamos en Travel Vibes!</p>
   </section>
   <section class="container bg-secondary text-light" id="tours">
     <h1 class="text-center p-2 font-weight-bold  w-50 mx-auto m-4 subrayado">Tours</h1>
<?php
if (!empty($_SESSION) && ($_SESSION["acc"] == 2)){
 ?>
  <div class="content">
  <div id="div_tabla" >
  </div>
    <div class="d-flex justify-content-center" >
    <nav aria-label="Page navigation example" class="">
      <ul class="pagination" id="pagination">
      </ul>
    </nav>
  </div>
  </div>

<?php
 } else {
  ?>
    <p1> Regístrate o loguéate para ver nuestra oferta de tours</p1> 
  </h5>
<?php
 }
?>
</section>
<section class="container"> 
  <h1 class="text-center p-2 font-weight-bold w-50 mx-auto m-4 subrayado" >Opinión de nuestros clientes</h1>
  <div class="progress my-4">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">95% de satisfacción
    </div>
  </div>
   <div class="progress my-4">
     <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90% de usuarios nos recomiendan
     </div>
    </div>
   </div>
 </div>
</section> 
<section class="container text-justify mt-5" id="donde">
    <h1 class="text-center p-2 font-weight-bold  w-50 mx-auto m-4 subrayado h1-responsivo" >Dónde estamos</h1>
      <p>Travel Vibes está situado en Málaga capital entre el Mercado de Atarazanas y el puente de la esperanza (Hotel NH) y otro en C/ Martinez Maldonado nº2.</p>
      <iframe class="float-left w-50 p-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.402707511049!2d-4.429887084712574!3d36.71288847996665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f79064970b2d%3A0xc6f864f8f421bc0a!2sCalle+Salitre%2C+21%2C+29002+M%C3%A1laga!5e0!3m2!1suk!2ses!4v1527874533115" width="200" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
  <dl class="float-right w-50 p-3">
    <dt class="col-sm-3">Dirección</dt>
    <dd class="col-sm-9">Málaga, c/Salitre, 21</dd> <br/>
  </dl>
    <h1 class="text-center p-3 font-weight-bold w-50 mx-auto m-4 ">Encuéntranos también en redes sociales</h1>
        <ul class="list-inline text-center p-2 font-weight-bold w-50 mx-auto m-4 ">
     <li class="list-inline-item icono-estilo text-primary"><a href="https://www.facebook.com/travelvibesUK/" target="_blank"><i class="fa fa-facebook-square" ></i></a></li>
     <li class="list-inline-item icono-estilo text-primary"><a href="https://www.instagram.com/travibes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
     <li class="list-inline-item icono-estilo text-primary"><a href="https://twitter.com/jimfchow/lists/travel-tweeters" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
  </ul>
</div>
</section>
<section class="container">
  <h1 class="text-center p-2 font-weight-bold w-50 mx-auto m-4 subrayado" >Contacto</h1>
    <dt class="col-sm-6">Persona de contacto</dt>
    <dd class="col-sm-9">Viktoriia Stasiuk</dd>
    <dt class="col-sm-3">Teléfono</dt>
    <dd class="col-sm-9">66 484 33 66</dd>
    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9">v.stasiuk07@gmail.com</dd>  
<h3 class="text-center p-1 font-weight-bold w-50 mx-auto m-4 ">Horario de atención</h3>
    <dt class="col-sm-6">De lunes a viernes</dt>
    <dd class="col-sm-9">de 9:30 a 13:00 <br/> de 15:30 a 20:00</dd><br/>
    <dt class="col-sm-3">Sábados</dt>
    <dd class="col-sm-9">de 9:30 a 14:30</dd><br/>
</div>
</section>
</body>
</html>
