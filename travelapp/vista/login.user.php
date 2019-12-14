<!doctype html>
<html>
<?php
session_start();
if(!empty($_SESSION)){
    header("location: ../index.php?mod=user&ope=log&usuario=".$_SESSION["usuario"]."&password=".$_SESSION["password"]);
    }
?>
    <head>
        <meta charset="utf-8">
        <title>Travel</title>
        <link href="../imagenes/favicont.ico" rel="shortcut icon">
        <link href="https://fonts.googleapis.com/css?family=Seaweed+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
    </head>
    <body>
    <div class="dos">
           <a href="../index.php">HOME</a>&#160; &#160; 
           <a href="registarse.user.php">Sign Up</a>
    </div> 
    <div class="login">

        <form action="../index.php" method="get" id="log" name="log">
 
        <input type="hidden" name="mod" value="user">
        <input type="hidden" name="ope" value="log">

            <h1>Log in</h1>

                <label for="usuario">Usuario: </label>
                <input id="usuario" type="text" name="usuario" required="" placeholder="Nombre de usuario"/>
                <br/>
                <label for="password">Contraseña: </label>
                <input id="password" type="password" name="password" required="" placeholder="Contraseña"/>
                <br/>
                <button type="submit">Login</button>              
         </form>
         
    </div>        
    </body>
</html>
