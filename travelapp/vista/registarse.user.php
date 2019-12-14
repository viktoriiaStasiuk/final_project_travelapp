<!DOCTYPE html>
<html lang="es">
<head>
    <title>Travel</title>
    <meta charset="utf-8" />
    <link href="../imagenes/favicont.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/validacion.js"></script>
</head>
<body>
    <div class="dos">
        <a href="../index.php">HOME</a>
    </div> 
<div class="registro">
    <form action="../index.php" method="get" id="reg" name="reg" > 
        <input type="hidden" name="mod" value="user">
        <input type="hidden" name="ope" value="reg">
                
        <h1>Registration</h1>
        
        <label for="nom">Nombre: </label>
        <input id="nom" type="text" name="nom" placeholder="Nombre" />
        <br/>
        <label for="ape">Apellidos: </label>
        <input id="ape" type="text" name="ape" placeholder="Apellidos"/>
        <br/>
        <label for="usr">Usuario: </label>
        <input id="usr" type="text" name="usr" required placeholder="Nombre de usuario"/>
        <br/>
        <label for="pwd">Contraseña: </label>
        <input id="pwd" type="password" name="pwd" required placeholder="Contraseña"/>
        <br/>
		<label for="pwd2">Repite contraseña: *</label>
		<input id="pwd2" type="password" name="pwd2" required placeholder="Repite contraseña">
		<br/>
        <label for="mail">Email: </label>
        <input id="mail" type="email" name="mail" placeholder="Email"/>
        <br/>
        
        <button type="submit" >Register</button>
    </form>
</div>
</body>
</html>