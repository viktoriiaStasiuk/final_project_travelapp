<?php
require_once 'Conexion.php';

class Tour extends Conexion {
    
    public function __construct() {
        parent::__construct();
    }
    public function getAll(int $desde, int $filas): array {
        $query = "SELECT * FROM tours ORDER BY fecha_inicio LIMIT {$desde},{$filas}";
        return $this->ConsultaSimple($query);
    }
    public function getSearch(string $termino): array {
        $where = "WHERE nombre LIKE :nombre || fecha_inicio LIKE :fecha_inicio || fecha_fin LIKE :fecha_fin || foto LIKE :foto  ORDER BY fecha_inicio ASC";
        $array = array(':nombre' => '%' . $termino . '%', ':fecha_inicio' => '%' . $termino . '%', ':fecha_fin' => '%' . $termino . '%', ':foto' => '%' . $termino . '%');
        return $this->ConsultaCompleja($where, $array);
    }
    public function getPagination(): array {
        $query = "SELECT COUNT(*) FROM tours;";
        return array(
            'filasTotal'  => intval($this->db->query($query)->fetch(PDO::FETCH_BOTH)[0]),
            'filasPagina' => 4,
        );
    }
    public function showTable(array $array): string {
        $html = '';
        if (count($array)) {
            foreach ($array as $value) {
                $html .=     " <article style='width: 450px;
                                background-color: rgb(205,219,241);
                                box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.4);
                                margin: 50px;
                                padding: 50px;
                                display: inline-flex;
                                flex-direction: column; 
                                position: relative;
                                text-align: center;'> " .

        "<img src=" . '"' . $value['foto'] . '"' . ">" .
        $value['nombre'] . "<br/>" .
        $value['fecha_inicio'] . "<br/>" .
        $value['fecha_fin'] . "<br/>

      </article>";
            }
        } else {
            $html = '<h4 class="text-center">No se encontraron resultados.</h4>';
        }
        return $html;
    }
}