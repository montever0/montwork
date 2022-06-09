<?php

function view($title, $path, $style, $data = []){

    //Agregar clase de plantillas
    require_once('tools/template.class.php');

    $path = 'views/html/'.$path.'.html';

    //Crear plantilla
    $child = new Template($path, $data);

    $view = new Template('views/index.html', [
        'title' => $title,
        'style' => $style,
        'child' => $child
    ]);

    echo $view;

}

?>
