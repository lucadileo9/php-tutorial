<?php

use Core\Response;
use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"], "root", "");

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();


if ($note['user_id'] !== 1) {
    abort(Response::FORBIDDEN);
}

require base_path('views/notes/show.view.php');