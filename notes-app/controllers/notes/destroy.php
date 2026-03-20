<?php

use Core\Database;
use Core\Response;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

// esattamente come nel show.php, dobbiamo prima verificare che la nota esista e che l'utente abbia i "permessi" per eliminarla
$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();