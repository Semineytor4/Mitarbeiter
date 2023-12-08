<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/abteilung' => 'controllers/abteilung.php',
    '/mitarbeiter/create'=> 'controllers/mitarbeiterCreate.php',
    '/mitarbeiter/delete'=> 'fun/mitarbeiterDelete.php',
    '/mitarbeiter/update'=> 'controllers/mitarbeiterUpdate.php',
    '/abteilung/delete'=> 'fun/abteilungDelete.php',


    '/abteilung/create' => 'controllers/abteilungCreate.php',

    // '/mitarbeiter/update'=> 'views/mitarbeiterUpdate.php',

    '/abteilung/fun/create' => 'fun/createAbteilung.php',
    '/mitarbeiter/fun/create' => 'fun/createMitarbeiter.php',
    '/mitarbeiter/fun/update' => 'fun/updateMitarbeiter.php',

];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
};
    ?>