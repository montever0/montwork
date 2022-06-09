<?php
$uri = $_SERVER["REQUEST_URI"];

include_once 'tools/view.ensambler.php';

switch($uri) {
    case '/':
        view('home', 'home', '');
        break;
    default:
        echo '404';
}
?>
