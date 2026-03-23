<?php
// ROUTES
// return [
//     "/"          => "controllers/index.php",
//     "/about"     => "controllers/about.php",
//     "/contact"   => "controllers/contact.php",
//     "/notes"     => "controllers/notes/index.php",
//     "/note"     => "controllers/notes/show.php",
//     "/notes/create"     => "controllers/notes/create.php",
// ];

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/notes", "controllers/notes/index.php")->middleware('auth');
$router->get("/note", "controllers/notes/show.php");
$router->get("/notes/create", "controllers/notes/create.php");

$router->post("/notes", "controllers/notes/store.php");
$router->delete("/note", "controllers/notes/destroy.php");

$router->get("/note/edit", "controllers/notes/edit.php");
$router->put("/note", "controllers/notes/update.php");

$router->get("/registration", "controllers/users/create.php")->middleware('guest');
$router->post("/registration", "controllers/users/store.php");

$router->get("/login", "controllers/sessions/create.php")->middleware('guest');
$router->post("/login", "controllers/sessions/store.php");
$router->delete("/logout", "controllers/sessions/destroy.php")->middleware('auth');