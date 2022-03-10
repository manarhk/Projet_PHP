<?php
include_once('../header.php');
require_once('../Controller/filmRepository.class.php');

if(!empty($_GET["nom"]) && !empty($_GET["vote"])){
    $nom = htmlspecialchars($_GET["nom"]) ;
    $vote = htmlspecialchars($_GET["vote"]) ;
    if($vote>5 || $vote<0){
        echo "Le vote ne peut se trouver qu'entre 0 et 5";
    }
    else{
        voter($nom, $vote);
    }
}
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>
    <title>Projet PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h1 class="txt"><br /> - Voter pour un film</h1>
<form action="vote.php" method="get">
    <p class="txt">Nom du film :<input id="ep" type="text" name="nom"></p>
    <p class="txt"> Vote <input id="ep" type="text" name="vote"> /5</p>
    <p><input id="button" type="submit" value="Voter" name="display">
</form>
</body>
</html>
