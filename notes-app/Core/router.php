<?php

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$routes = require base_path("routes.php");

// ---- Include la pagina corretta ----
$page = resolve_route($routes);
include $page;
