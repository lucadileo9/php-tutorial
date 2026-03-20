<?php
require 'functions.php';
require 'Database.php';

// require 'functions.php';
// // ROUTES
// $routes = [
//     "/"          => "controllers/index.php",
//     "/about"     => "controllers/about.php",
//     "/contact"   => "controllers/contact.php",
// ];

// // dd(parse_url($_SERVER['REQUEST_URI'])['path']);
// // ---- Router Function ----
// function resolve_route($routes) {
//     $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//     // Se la route esiste, torna il file
//     if (array_key_exists($uri, $routes)) {
//         return $routes[$uri];
//     }

//     // Altrimenti ritorna 404
//     return abort(404);
// }

// // ---- 404 Function ----
// function abort($code) {
//     http_response_code($code);
//     return "controllers/{$code}.php";
// }

// // ---- Include la pagina corretta ----
// $page = resolve_route($routes);
// include $page;


$config = require("config.php");

$db = new Database($config["database"], "root", "");

$posts = $db->query("select * from blog")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post):
    echo "<li>" . $post['title'] . "</li>";
endforeach;
