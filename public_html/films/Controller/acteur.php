<?php
session_start();

include_once('../Model/bd.php');
require_once("actorRepository.class.php");
include_once('../header.php');
include_once('../updatingActor.php');

    $bdd = BD::connectDB();
    $query=$bdd->prepare('SELECT DISTINCT f.*, a.* FROM acteur a LEFT JOIN casting c ON f.id=c.id_film LEFT JOIN film f ON c.id_film=f.id order by a.id');
    $query->execute();
    $results = $query->fetchAll();
    $acteur_precedent = 0;

foreach($results as $result){
    if ($result[0]!=$acteur_precedent){
        echo "Acteur :" . $result['a.nom']." ".$result['a.prenom']."<br>";
        echo "Films :" . $result["f.nom"]. "<br>";
    }
    else{
        echo $result["f.nom"]. "<br>";
    }
    $acteur_precedent=$result[0];
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

