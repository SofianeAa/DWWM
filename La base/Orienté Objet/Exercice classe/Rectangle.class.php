<?php

class Rectangle
{
    //Attributs
    private $_longueur;
    private $_largeur;

    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($longueur)
    {
        $this->_longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($largeur)
    {
        $this->_largeur = $largeur;
    }

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    // Autre méthodes

    public function perimetre()
    {
        return ($this->_longueur * 2) + ($this->_largeur * 2);
    }

    public function aire()
    {
        return ($this->_longueur) * ($this->_largeur);
    }

    public function estCarre()
    {
        return ($this->_longueur) == ($this->_largeur);
    }

    public function afficherRectangle()
    {

        if ($this->getLongueur() == $this->getLargeur()) {

            $carre = "Il s'agit d'un carré.";

        } else {
            $carre = "Il s'agit d'un rectangle.";
        }

        echo "Longueur : " . $this->getLongueur() . "\nLargeur : " . $this->getLargeur() . "\nPérimètre : " . $this->perimetre() . "\nAire : " . $this->aire() . "\n$carre";
    }

}

$rec1 = new Rectangle([Longueur => 50, Largeur => 60]);

echo $rec1->AfficherRectangle();
