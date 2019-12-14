<?php
	require_once "Database.php" ;

	class User {

		private $idUsuario ;
		private $usuario ;
		private $nombre ;
		private $apellidos ;
		private $email ;
		private $password ;
		private $idAcc ;


		public function __construct() 
		{
		}

        public function setUsuario($usr)   { $this->usuario = $usr ;}
		public function setNombre($nom)    { $this->nombre = $nom ;}
		public function setApellidos($ape) { $this->apellidos = $ape ;}
		public function setEmail($mail)    {$this->email = $mail ;}
		public function setPassword($pwd)  { $this->password = $pwd ;}
		public function setIdAcc($idAcc)   { $this->idAcc = $idAcc ;}

		public function getIdUsuario()   { return $this->idUsuario; }
		public function getUsuario()     { return $this->usuario;}
  	    public function getNombre()      { return $this->nombre; }
  	    public function getApellidos()   { return $this->apellidos; }
  	    public function getEmail()       { return $this->email;}
		public function getPassword()    { return $this->password;}
		public function getIdAcc()       { return $this->idAcc;}


		public function reg() {
  		$bd = Database::getInstance();
  		$bd->doQuery("INSERT INTO usuario(usuario, email, password, nombre, apellidos, idAcc) VALUES (:usr, :mail, :pwd, :nom, :ape, :idAcc);",
  	                  [":usr"  => $this->usuario,
  	                   ":mail" => $this->email,
  	                   ":pwd"  => $this->password,
  	                   ":nom"  => $this->nombre,
                       ":ape"  => $this->apellidos,
                       ":idAcc"  => $this->idAcc]
                       );
  		$this->idUsuario = $bd->getLastId();
  	    }
  	    public static function logout() {
			
			$_SESSION = [];
			session_destroy();
			session_unset();
		}

		public function __toString()
		{
			return "El ususario: $this->usuario<br/>" ;
		}

		public static function getUser() {

        $bd = Database::getInstance();
        $usuario=$_GET["usuario"];
        $password=$_GET["password"];
        $bd->doQuery("SELECT * FROM usuario WHERE usuario = :usuario AND password = :password;",
                      [":usuario"  => $usuario,
                       ":password" => $password]);

        $rsl=$bd->getRow();
        if(empty($rsl)){
          echo'<script type="text/javascript">
               alert("Usuario o contraseña incorrecto");
               window.location.href="vista/login.user.php";
              </script>';
        } else {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password; 
        $_SESSION["acc"] = $rsl->idAcc;
		}

	}
}








