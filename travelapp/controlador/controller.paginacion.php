<?php

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require_once '../modelo/Tour.php';
    $tour    = new Tour();
    $paginacion = array();
    $paginacion = $tour->getPagination();
    echo ceil($paginacion['filasTotal'] / $paginacion['filasPagina']);
} else {
    header('Location: index.php');
}