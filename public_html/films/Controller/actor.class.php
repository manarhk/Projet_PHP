<?php
class Acteur{
    protected $id,
        $nom,
        $prenom;


    public function __construct($nom, $prenom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    public function nomValide(){
        return !empty($this->nom);
    }

    public function nom(){
        return $this->nom;
    }

    public function prenomValide(){
        return !empty($this->prenom);
    }
    public function prenom(){
        return $this->prenom;
    }

    public function id(){
        return $this->id;
    }

    public function setId($id){
        $id = (int) $id;

        if ($id > 0)
        {
            $this->id = $id;
        }
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
}