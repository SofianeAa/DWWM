<?php
Class Personne {

    //Attributs
    private $_sexe;
    private $_nom;
    private $_prenom;
    private $_age;

    //Constructeur
    public function __construct()
    {}
    

    //Assesseurs

    //GETTER
    public function getSexe ()
    {
        return $this ->_sexe;
    }
    public function getNom ()
    {
        return $this ->_nom;
    }
    public function getPrenom ()
    {
        return $this ->_prenom;
    }
    public function getAge ()
    {
        return $this ->_age;
    }


    // SETTER
    public function setSexe ($s)
    {
        $this ->_sexe = $s;
    }
    public function setNom ($nom)
    {
        $this ->_nom = $nom;
    }
    public function setPrenom ($prenom)
    {
        $this ->_prenom = $prenom;
    }
    public function setAge ($age)
    {
        $this ->_age = $age;
    }
}