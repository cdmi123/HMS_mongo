<?php 

require_once 'vendor/autoload.php';

// session:

session_start();

// Database Connection string
$database_connectin = new MongoDB\Client("mongodb://localhost:27017");
$db = $database_connectin->Hospital_management;

 ?>