<?php

function dd($value) {
    echo "<pre style='background:#111; color:#0f0; padding:15px; border-radius:8px; font-size:14px; line-height:1.4;'>";
    
    var_dump($value);
    echo "</pre>";
    die();
}

// ---- Router Function ----
function resolve_route($routes) {
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // Se la route esiste, torna il file
    if (array_key_exists($uri, $routes)) {
        return $routes[$uri];
    }

    // Altrimenti ritorna 404
    return abort(404);
}

// ---- 404 Function ----
function abort($code) {
    http_response_code($code);
    return "views/{$code}.php";
}