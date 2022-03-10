<?php
include_once('../header.php');
require_once('../Controller/filmRepository.class.php');

    $id = htmlspecialchars($_GET["id"]) ;
    detailFilm($id);
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <title>Projet PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1 class="txt"><br />- Afficher détails du film</h1>
    <form action="detail_film.php" method="get">
        <p class="txt">ID</p><input id="ep" type="text" name="id">
        <p><input id="button" type="submit" value="Afficher" name="display">
    </form>
</body>
</html>


