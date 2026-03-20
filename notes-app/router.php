<?php

// ROUTES
$routes = [
    "/"          => "controllers/index.php",
    "/about"     => "controllers/about.php",
    "/contact"   => "controllers/contact.php",
    "/notes"     => "controllers/notes.php",
    "/note"     => "controllers/note.php",
];

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);


// ---- Include la pagina corretta ----
$page = resolve_route($routes);
include $page;
