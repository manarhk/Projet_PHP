<?php
require('../Model/bd.php');
require('film.class.php');
class filmRepository
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function add(Film $film)
    {
        $q = $this->_db->prepare('INSERT INTO film(nom, annee, score, nbVotants) VALUES(:nom, :annee, :score, :nbVotants)');

        $q->bindValue(':nom', $film->nom());
        $q->bindValue(':annee', $film->annee());
        $q->bindValue(':score', $film->score());
        $q->bindValue(':nbVotants', $film->nbVotants());
        $q->execute();
    }

    public function delete(Film $film)
    {
        $this->_db->exec('DELETE FROM film WHERE nom = '.$film->nom());
    }

    public function update(Film $film)
    {
        $q = $this->_db->prepare('UPDATE film SET annee = :annee, score = :score, vote = :vote WHERE nom = :nom');

        $q->bindValue(':nom', $film->nom());
        $q->bindValue(':annee', $film->annee());
        $q->bindValue(':score', $film->score());
        $q->bindValue(':vote', $film->nbVotants());
        $q->bindValue(':id', $film->id());

        $q->execute();
    }

    function detailFilm($id){
        $bdd = BD::connectDB();
        $query=$bdd->prepare("SELECT f.nom, f.annee, f.score, f.nbVotants, a.nom, a.prenom FROM film f RIGHT JOIN casting c ON f.id = c.id_film RIGHT JOIN acteur a ON c.id_film=a.id where f.id='$id'");
        $query -> execute();
        $results = $query -> fetchAll();
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
    }

    function voter($nom, $vote){
        $bdd = BD::connectDB();
        $query=$bdd->prepare("UPDATE film SET score = ($vote+score)/sum(score)+1 WHERE nom = $nom");
        $query -> execute();
        $results = $query -> fetchAll();
    }

}