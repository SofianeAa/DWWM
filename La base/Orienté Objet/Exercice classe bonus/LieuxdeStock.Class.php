<?php

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

class LieuxDeStock
{
    /*****************Attributs***************** */
    private $_ville;
    private $_numéroEntrepot;
    private $_zone;
    /*****************Accesseurs***************** */

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    public function getNuméroEntrepot()
    {
        return $this->_numéroEntrepot;
    }

    public function setNuméroEntrepot($numéroEntrepot)
    {
        $this->_numéroEntrepot = $numéroEntrepot;
    }

    public function getZone()
    {
        return $this->_zone;
    }

    public function setZone($zone)
    {
        $this->_zone = $zone;
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
        return "Ville : " . $this -> getVille() . "\nNuméro d'entrepot : " . $this->getNuméroEntrepot() . "Zone : " . $this->getZone();
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
