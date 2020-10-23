<?php
class Personne
{
    // Attributs
    private $_sexe;
    private $_age;
    private $_prenom;
    private $_nom;

    //assesseur

    //GETTER
    public function getSexe()
    {
        return $this->_sexe;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getNom()
    {
        return $this->_nom;
    }

    //SETTER
    public function setSexe()
    {
        $this->_sexe = $s;
    }
    public function setAge()
    {
        $this->_age = $a;
    }
    public function setPrenom()
    {
        $this->_prenom = $p;
    }
    public function setNom()
    {
        $this->_nom = $n;
    }

    public function __construct(String $s,String $a,String $p,String $n)
    {
        $this->setSexe($s);
        $this->setAge($a);
        $this->setPrenom($p);
        $this->setNom($n);
    }

    //Autre méthode
    public function toString()
    {
        $reponse = "Cette personne est un(e) $this->getSexe() \nElle a $this->getAge()\nEt s'appel $this->getNom() $this->getPrenom()";
        return $reponse;
    }
    public function equalTo(Personne $objet)
    {
        if
        ($this->_nom == $objet->getNom() &&
            $this->_prenom == $objet->getPrenom() &&
            $this->_age == $objet->getAge() &&
            $this->_sexe == $objet->getSexe()) {
            return true;
        }
        return false;
    }

    public function compareTo(Personne $objet)
    {
        return $this->_age > $objet->getAge() ? 1 : ($this->_age < $objet->getAge() ? -1 : 0);
    }
}