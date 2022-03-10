<?php
session_start();

include_once('../Model/bd.php');
require_once("filmRepository.class.php");
include_once('../header.php');
include_once('../updatingFilm.php');

    $bdd = BD::connectDB();
    $query=$bdd->prepare('SELECT DISTINCT f.*, a.* FROM film f LEFT JOIN casting c ON f.id=c.id_film LEFT JOIN acteur a ON c.id_acteur=a.id');
    $query->execute();
    $results = $query->fetchAll();
    $film_precedent = 0;

foreach($results as $result){
    if ($result[0]!=$film_precedent){
        echo "Film :" . $result["nom"]. "<br>" . " est paru en " . $result["annee"] . "Son score est de :" . $result["score"] . ". " . $result["nbVotants"]. "ont votés pour ce film."."<br>"."Acteurs :". $result['nom']." ".$result['prenom']."<br>";
    }
    else{
        echo $result['nom']." ".$result['prenom']."<br><br>";
    }
    $film_precedent=$result[0];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Projet PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>

</html>