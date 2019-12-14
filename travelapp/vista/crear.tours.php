<?php
if(empty($_SESSION)){
  session_unset();
  header("location: vista/login.user.php");
} else {
  ?>
<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <title>Lista de Tours</title>
   <link href="imagenes/favicont.ico" rel="shortcut icon">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="dos">
    <a href="index.php?mod=user&ope=indexTour">Volver atrás</a>
  </div>
<div class="create">
  <h2>Crear nuevo tour</h2>
  <form action="" method="get">
    <input type="hidden" name="mod" value="tours">
    <input type="hidden" name="ope" value="create">
    
    <label for="nom">Nombre del tour:</label>
    <input id="nom" name="nom" type="text" required />
         <br/>
    <label for="fechai">Fecha del inicio:</label>
    <input id="fechai" name="fechai" type="date" /> 
         <br/>
    <label for="fechaf">Fecha del fin:</label>
    <input id="fechaf" name="fechaf" type="date" /> 
         <br/>
    <button type="submit">Crear tour</button>
  </form>
</div>
</body>
</html>
<?php
}
?>