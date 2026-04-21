<?php
require_once("core/config.php");

$dsn = "mysql:host=".DB["host"].";dbname=".DB["dbname"].";charset=utf8";

$pdo = new PDO($dsn, DB["user"], DB["pwd"]);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Fehlermode & ERRMODE_EXCEPTION
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Fetchmode & Assoziatives Array (Assoc)


?>