<?php
session_start();

    include_once('../Model/bd.php');
    require_once("filmRepository.class.php");

    if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['annee']) && isset($_POST['score']) && isset($_POST['nbVotants'])) {
        $nom = $_POST['nom'];
        if ($_POST['submitAjouter']){
            $bdd = BD::connectDB();
            $movie = new film($_POST['id'],$_POST['nom'],$_POST['annee'],$_POST['score'],$_POST['nbVotants']);
            $result= new filmRepository($bdd);
            $result->add($movie);
        }else if ($_POST['submitSupprimer']){
            $bdd = BD::connectDB();
            $movie = new film($_POST['id'],$_POST['nom'],$_POST['annee'],$_POST['score'],$_POST['nbVotants']);
            $result= new filmRepository($bdd);
            $result->delete($movie);
        }else if ($_POST['submitModifier']){
            $bdd = BD::connectDB();
            $movie = new film($_POST['id'],$_POST['nom'],$_POST['annee'],$_POST['score'],$_POST['nbVotants']);
            $result= new filmRepository($bdd);
            $result->update($movie);
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
<h1 class="txt"><br />- Mettre à jour un film</h1>
<form action="film.php" method="post">
    <p class="txt">ID</p><input id="ep" type="text" name="id">
    <p class="txt">Nom du film</p><input id="ep" type="text" name="nom">
    <p class="txt">Année de parution</p><input id="ep" type="text" name="annee">
    <p class="txt">Score</p><input id="ep" type="text" name="score">
    <p class="txt">Nombre de votants</p><input id="ep" type="text" name="nbVotants">
    <p><input id="button" type="submit" value="Soumettre ce nouveau film" name="submitAjouter">
    <input id="button" type="submit" value="Supprimer ce film" name="submitSupprimer">
    <input id="button" type="submit" value="Modifier ce film" name="submitModifier"></p>
</form>

</body>

</html>