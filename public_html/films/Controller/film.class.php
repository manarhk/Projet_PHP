<?php
class film{
    protected $id,
        $nom,
        $annee,
        $nbVotants,
        $score;


    public function __construct($nom, $score, $annee){
        $this->setNom($nom);
        $this->setNbVotants();
        $this->setScore($score);
        $this->setAnnee($annee);
    }

    public function setId($id)
    {
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

    public function setNbVotants()
    {
        $this->nbVotants++;
    }

    public function setScore($score)
    {
        $score = floatval($score);
        if ($score  > 0) {
            $this->score = $score;
        }
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    public function nom()
    {
        return $this->nom;
    }

    public function annee()
    {
        return $this->annee;
    }

    public function score()
    {
        return $this->score;
    }

    public function nbVotants()
    {
        return $this->nbVotants;
    }

    public function id()
    {
        return $this->id;
    }


}