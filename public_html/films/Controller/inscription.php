<?php
session_start();
include_once('../Model/bd.php');

$bdd = BD::connectDB();
if (isset($_POST['email']) && isset($_POST['login']) && isset($_POST['pwd'])) {
    $query = $bdd -> prepare('INSERT INTO user (email,login,pwd) VALUES(:email,:login,:pwd)');
    $query -> execute(array(':email' => $_POST['email'], ':login' => $_POST['login'], ':pwd' => $_POST['pwd']));
    $_SESSION['email']=$_POST['email'];
    $_SESSION['pwd']= $_POST['pwd'];
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
<?php include_once('../header.php'); ?>
<form action="login.php" method="post">
    <p class="txt">Login</p><input id="ep" type="text" name="login">
    <p class="txt">E-mail</p><input id="ep" type="text" name="email">
    <p class="txt">Mot de passe</p><input id="ep" type="text" name="pwd">
    <input id="button" type="submit" value="Valider l'inscription" name="submit">
</form>
</body>

</html>

