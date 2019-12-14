<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start();

  $mod = $_GET["mod"]??"user"; 
  $ope = $_GET["ope"]??"index";  

  require_once "controlador/controller.$mod.php";

  $nme = "controller$mod";

   $cont = new $nme();

   if(method_exists($cont, $ope)) $cont->$ope();
   else
     die ("**Error: se ha producido un error de la aplicación"); 



?>