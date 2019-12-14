<?php

require_once "modelo/Tours.php";

class controllerTours{

  public function __constant()
  { 

  }

  public function index() {

  if(empty($_SESSION)){
    session_unset();
    header("location: vista/login.user.php");
  } else {
    $datos = Tours::getAllTours();
    require_once "vista/index.tours.php"; 
    }
  }
  public function create(){


   if(empty($_SESSION)){
    session_unset();
    header("location: vista/login.user.php");

  } else {
  	if (isset($_GET["nom"])):

        $trip = new Tours();
        $trip->setNombre($_GET["nom"]);
        $trip->setFecha_inicio($_GET["fechai"]);
        $trip->setFecha_fin($_GET["fechaf"]);
        $trip->insert();

        $this->index();

  	else:

  		require_once "vista/crear.tours.php";

  	endif;
}
  }
  
  public function edit()
  {
  if(empty($_SESSION)){
    session_unset();
    header("location: vista/login.user.php");

  } else {
    $id = $_GET["idTour"]??"";

    if(!empty($id)): 
      $trip = Tours::getBoard($_GET["idTour"]);

      if(isset($_GET["nom"])): 
       $trip->setNombre($_GET["nom"]); 
       $trip->setFecha_inicio($_GET["fechai"]);
       $trip->setFecha_fin($_GET["fechaf"]);
       $trip->edit(); 

       $this->index();

      else:
        $nombre = $trip->getNombre();
        $fecha_inicio = $trip->getFecha_inicio(); 
        $fecha_fin = $trip->getFecha_fin(); 
        require_once "vista/edit.tours.php"; 
      endif;

    else:

      $this->index();
    endif;
    }
  }

  public function delete()
  {

  if(empty($_SESSION)){
    session_unset();
    header("location: vista/login.user.php");

  } else {
    if (isset($_GET["idTour"]))

      Tours::deleteBoard($_GET["idTour"]);

      $this->index(); 
  }
}

}

?>