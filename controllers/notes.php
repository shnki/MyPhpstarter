<?php

$heading = 'Notes';
$config = require('config.php');
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->fetchAll();
require "views/notes.view.php";

