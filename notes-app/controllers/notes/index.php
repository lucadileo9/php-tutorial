<?php
use Core\Database;

$config = require base_path("config.php");


$db = new Database($config["database"], "root", "");
$notes = $db->query("select * from notes")->getAll();
view('/notes/index.view.php', ['notes' => $notes]);
