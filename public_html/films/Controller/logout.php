<?php
    session_start();
    session_destroy();
include_once('../header.php');
include_once('../Model/bd.php');

echo "</br>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Projet PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<p class=txt>Vous êtes maintenant déconnecté.</p>
</body>
</html>