<?php

// require classes
require 'classes/Form.php';
require 'classes/Database.php';
require 'classes/User.php';

// set db name
$dbname = 'test_db';

// connect to db
$db = new Database($dbname);
$conn = $db->connect();
