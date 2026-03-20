<?php

$config = require("config.php");

$db = new Database($config["database"], "root", "");

$notes = $db->query("select * from notes")->fetchAll(PDO::FETCH_ASSOC);

require 'views/notes.view.php';