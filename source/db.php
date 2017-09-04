<?php
session_start();
define("JSON_PATH", "../resource/connections/");
require_once 'php/query.php';
$query = new query($driver, $host, $dbname, $username);

?>

