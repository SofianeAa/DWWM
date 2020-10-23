<?php
class Agence
{

    /*****************Attributs***************** */
    private $_Nom;
    private $_Adresse;
    private $_codepostal;
    private $_Ville;
    private $_restauration;

    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_Nom;
    }

    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }

    public function getAdresse()
    {
        return $this->_Adresse;
    }

    public function setAdresse($Adresse)
    {
        $this->_Adresse = $Adresse;
    }

    public function getCodepostal()
    {
        return $this->_codepostal;
    }

    public function setCodepostal($codepostal)
    {
        $this->_codepostal = $codepostal;
    }

    public function getVille()
    {
        return $this->_Ville;
    }

    public function setVille($Ville)
    {
        $this->_Ville = $Ville;
    }

    public function getRestauration()
    {
        return $this->_restauration;
    }

    public function setRestauration($restauration)
    {
        $this->_restauration = $restauration;
    }

    /*****************Constructeur***************** */

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

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "\nNom : " . $this->getNom() . "\nAdresse : " . $this->getAdresse() . "\nCode postal : " . $this->getCodepostal() . "\nVille : " . $this->getVille() . "\nRestauration : " . $this->getRestauration() . $this->Ticketresto();
    }

    public function Ticketresto()
    {
        if ($this->getRestauration() == "Non") {
            return "\nVous aurez des tickets resto";
        }
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

}
