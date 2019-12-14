<?php

	class Database {

		private $dbHost = "sql208.epizy.com" ;
		private $dbUser = "epiz_24925643" ;
		private $dbPass = "3Rp0P7SasDPIs" ;
		private $dbName = "epiz_24925643_travel" ;

		private static $prp; 

		private static $pdo = null ; 
		private static $instance =null; 

		private function __construct()  
		{
			$this->conectar() ;
		}
		
		private function __clone() { }

		public static function getInstance() 
		{
			if (is_null(self::$instance)):
				self::$instance = new Database() ;
			endif ;
			
			return self::$instance ;
		}

		public function conectar()
		    {

		    try{
			self::$pdo = new PDO("mysql:host={$this->dbHost};dbname={$this->dbName};",
			$this->dbUser,
			$this->dbPass) ;

		    } catch (Exception $e)
		    
		      { die ("**ERROR: es imposible conectar con la base de datos."); }
	        } 

		public function doQuery($sql, $params=[]) 
		    { 
			self::$prp = self::$pdo->prepare($sql);

			$flg = self::$prp->execute($params);

			return($flg) && (self::$prp->rowCount() > 0);

            }
        public function getLastId()
            {
            	return self::$pdo->LastInsertId();
            }


		public function getRow($class="StdClass") 
		    { 
			if (self::$prp)
			   return self::$prp->fetchObject($class);
		    }



	}





