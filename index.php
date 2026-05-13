<?php

require_once("core/config.php");
// config in diesem Fall Front-Controller (Sessionstart und Laden der Einstellungen als Erstes)
// Dependency Injection: alle Objekte an einem Ort initiiert und bei Bedarf ineinander injiziert

$dsn = "mysql:host="   .   DB["host"]   .   ";dbname="   .   DB["name"];
// entspricht: mysql:host=localhost;dbname=jsproj;
$pdo = new PDO($dsn, DB["user"], DB["pwd"]);
// Verbindungsobjekt erstellen mit den Eingaben
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Bei Fehler Exception statt nur Warnung
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// Ergebnisse als Dictionary auslesen






?>