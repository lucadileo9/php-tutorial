<?php

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);

$routes = require "Route.php";

// ---- Include la pagina corretta ----
$page = resolve_route($routes);
include $page;
