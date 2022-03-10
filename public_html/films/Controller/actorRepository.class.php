<?php
require_once('actor.class.php');
class actorRepository
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function add(Acteur $acteur)
    {

        try {
            $q = $this->_db->prepare('INSERT INTO acteurs (nom, prenom) VALUES(:nom, :prenom)');
            $q->bindValue(':nom', $acteur->nom());
            $q->bindValue(':prenom', $acteur->prenom());
            $q->execute();

        }catch (Exception $e){
            var_dump($e);
            exit();
        }
    }

    public function delete(Acteurs $acteur)
    {
        $this->_db->exec('DELETE FROM acteurs WHERE id = ' . $acteur->id());
    }

    public function get($id)
    {
        $id = (int)$id;

        $q = $this->_db->query('SELECT * FROM acteurs WHERE id = ' . $id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Acteurs($donnees);
    }

    public function update(Acteurs $acteur)
    {
        $q = $this->_db->prepare('UPDATE acteurs SET nom = :nom, prenom = :prenom WHERE id = :id');

        $q->bindValue(':nom', $acteur->nom());
        $q->bindValue(':prenom', $acteur->prenom());

        $q->execute();
    }
}
?>