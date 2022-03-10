<?php session_start();

include_once('../Model/bd.php');

if(isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
}

$bdd = BD::connectDB();
$query = $bdd->prepare("SELECT email, pwd from user");
$query->execute();
$results = $query->fetchAll();

foreach($results as $result) {
    if ($result['email'] == $email and $result['pwd'] == $pwd) {
        $_SESSION['email'] = $result['email'];
        $_SESSION['pwd'] = $result['pwd'];
        if(isset($_POST['email']) && isset($_POST['pwd'])) {
            header('Location: film.php');
            exit();
        }
    }
    else {
        echo 'Login ou mot de passe incorrect';
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
<?php include_once('../header.php'); ?>
<form action="film.php" method="post">
    <p class="txt">E-mail</p><input id="ep" type="text" name="email">
    <p class="txt">Mot de passe</p><input id="ep" type="password" name="pwd">
    <input id="button" type="submit" value="Se connecter" name="submit">
    <p class="txt">Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
</form>
</body>

</html>