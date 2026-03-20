<?php

require 'Validator.php';

$config = require ('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    if (!Validator::validateNoteContent($_POST['content'])) {
        $errors[] = "Content must be between 5 and 255 characters.";
    }
    else {
        $db->query('INSERT INTO notes (content, user_id) VALUES (:content, :user_id)', [
            'content' => $_POST['content'],
            'user_id' => 1
        ]);
    }

}

require 'views/note_create.view.php';