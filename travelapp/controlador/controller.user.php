<?php

require_once "modelo/User.php";
require_once "modelo/Tours.php";
require_once "modelo/Database.php";


class controllerUser{


  public function __constant()
  { 

  }

  public function index() 
  {

    $datos = Tours::getAllTours();

    require_once "vista/index.tour.php"; 
  }

  public function log() 
  {
       if(isset($_GET['usuario']) && isset($_GET['password'])){

        User::getUser();
        if($_SESSION["acc"] == 2) {
          header("location: index.php?mod=user&ope=index");
        } else if ($_SESSION["acc"] == 3) {
          header("location: index.php?mod=user&ope=indexTour");
        }
      }
  } 

  public function indexTour() {
    $datos = Tours::getAllTours();

    require_once "vista/index.tours.php"; 
  }

public function reg() {
    if (isset($_GET["nom"])):

        $us = new User();
        $us->setNombre($_GET["nom"]);
        $us->setApellidos($_GET["ape"]);
        $us->setUsuario($_GET["usr"]);
        $us->setPassword($_GET["pwd"]);
        $us->setEmail($_GET["mail"]);
        $us->setIdAcc(2);
        $us->reg();

        $this->index(); 

    else:

      require_once "vista/registarse.user.php";

    endif;
  }
  public function cerrarSesion() {
    User::logout();
    header ("Location: index.php");
  }
}
?>