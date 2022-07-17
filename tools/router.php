<?php
$uri = $_SERVER["REQUEST_URI"];

require_once('tools/template.class.php');

switch($uri) {
    case '/':
        echo new Template('home', [
            'variable' => 'hola'
        ]);
        break;
    default:
        echo '404';
}
?>
