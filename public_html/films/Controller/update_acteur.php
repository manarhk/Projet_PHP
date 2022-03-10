<?php
session_start();

include_once('../Model/bd.php');
require_once("filmRepository.class.php");

if(isset($_POST["nom"]) && isset($_POST["prenom"])){
    if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
        $nom = $_POST['nom'];
        if ($_POST['submitAjouter']){
            $bdd = BD::connectDB();
            $actor = new actor($_POST['nom'],$_POST['prenom']);
            $results= new actorRepository($bdd);
            $results->add($actor);
        }else if ($_POST['submitSupprimer']){
            $bdd = BD::connectDB();
            $actor = new actor($_POST['nom'],$_POST['prenom']);
            $results= new actorRepository($bdd);
            $results->delete($actor);
        }else if ($_POST['submitModifier']){
            $bdd = BD::connectDB();
            $actor = new actor($_POST['nom'],$_POST['prenom']);
            $results= new actorRepository($bdd);
            $results->update($actor);
        }
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
<?php
include_once('../header.php');
?>

<h1 class="txt"><br />- Mettre à jour un acteur</h1>
<form action="actor.php" method="post">
    <p class="txt">Nom de l'acteur</p><input id="ep" type="text" name="nom">
    <p class="txt">Prénom de l'acteur</p><input id="ep" type="text" name="prenom">
    <p><input id="button" type="submit" value="Soumettre ce nouveau film" name="submitAjouter">
        <input id="button" type="submit" value="Supprimer ce film" name="submitSupprimer">
        <input id="button" type="submit" value="Modifier ce film" name="submitModifier"></p>
</form>

</body>

</html>
