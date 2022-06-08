<?php
class Template {

    private $content;

    public function __construct($path, $data = []) {
        extract($data);
        ob_start();
        include($path);
        $this->content = ob_get_clean();
    }

    public function __toString() {
        return $this->content;
    }
}

// $path es lo que agregamos a la pagina principal (index.html)
// $data son parametros que requiere el archivo html importado por $path
/*
FORMATO PARA PARAMETROS ($data)
$data = [
    'nombre variable en archivo html' => 'valor variable',
    'nombre variable en archivo html' => 'valor variable'
]
*/