<?php

$config = require ('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query('INSERT INTO notes (content, user_id) VALUES (:content, :user_id)', [
        'content' => $_POST['content'],
        'user_id' => 1
    ]);
}

require 'views/note_create.view.php';