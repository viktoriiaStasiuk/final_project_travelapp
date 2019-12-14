<?php
if ($_POST) {
    require_once '../modelo/Tour.php';
    $tour = new Tour();
    $data    = array();

    $paginacion  = array();
    $pagina      = $_POST['pagina'] ?? 1;
    $termino     = $_POST['termino'] ?? '';
    $paginacion  = $tour->getPagination();
    $filasTotal  = $paginacion['filasTotal'];
    $filasPagina = $paginacion['filasPagina'];
    $empezarDesde = ($pagina - 1) * $filasPagina;
    if ($termino != '') {
        $data = $tour->getSearch($termino);
    } else {
        $data = $tour->getAll($empezarDesde, $filasPagina);
    }
    echo $tour->showTable($data);
} else {
    header('Location: index.php');
}