<?php

$config = require("config.php");

$db = new Database($config["database"], "root", "");

$notes = $db->query("select * from notes")->getAll();

require 'views/notes.view.php';