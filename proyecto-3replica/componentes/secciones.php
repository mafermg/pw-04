<?php
$inicio = [
    'titulo' => 'Home',
    'contenido' => 'Este es un contenido',
    'imagen' => 'https://picsum.photos/700/300/?random',
];
$shop = [
    'titulo' => 'Shop',
    'contenido' => 'Aqui van cosas del shop',
    'imagen' => 'https://picsum.photos/700/300/?random',
];
$contacto = [
    'titulo' => 'Contact',
    'contenido' => 'Info del contacto',
    'imagen' => 'https://picsum.photos/700/300/?random',
];
$casimiro = [
    'titulo' => 'Casimiro',
    'contenido' => 'OK contenido de casimiro',
    'imagen' => 'https://picsum.photos/700/300/?random',
];
$secciones = [
    'p1' => $inicio,
    'p2' => $shop,
    'p3' => $contacto,
    'p4' => $casimiro,
];  
/* VICTOR!!!! */
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}
if (!isset($_GET['seccion'])) {
    $seccion = 'p1';
}

$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];

?>