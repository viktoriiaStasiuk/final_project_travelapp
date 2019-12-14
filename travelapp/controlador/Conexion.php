<?php
class Conexion {
    protected $db;
    public function __construct() {

        $this->db = $this->conectar();
    }

    private function conectar() {
        try {
            $HOST   = 'sql208.epizy.com';
            $DBNAME = 'epiz_24925643_travel';
            $USER   = 'epiz_24925643';
            $PASS   = '3Rp0P7SasDPIs';
            $con    = new PDO("mysql:host={$HOST}; dbname={$DBNAME}", $USER, $PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $con->exec('SET CHARACTER SET UTF8');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $con;
    }

    protected function ConsultaSimple(string $query): array {

        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function ConsultaCompleja(string $where, array $array): array {
        
        $query  = "SELECT * FROM tours {$where}";
        $result = $this->db->prepare($query);
        $result->execute($array);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
