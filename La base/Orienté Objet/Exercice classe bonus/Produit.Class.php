<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

class Produit
{

    /*****************Attributs***************** */
    private $_numero;
    private $_designation;
    private $_prixht;
    private $_couleur;
    private $_dateValidite;
    private $_categorie;
    private $_lieuxStockage = [];
    static private $_compteur = 0;

    /*****************Accesseurs***************** */

    
    public function getNumero()
    {
        return $this->_numero;
    }

    public function setNumero($numero)
    {
        $this->_numero = $numero;
    }

    public function getDesignation()
    {
        return $this->_designation;
    }

    public function setDesignation($designation)
    {
        $this->_designation = $designation;
    }

    public function getPrixht()
    {
        return $this->_prixht;
    }

    public function setPrixht($prixht)
    {
        $this->_prixht = $prixht;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    public function getDateValidite()
    {
        return $this->_dateValidite;
    }

    public function setDateValidite($dateValidite)
    {
        $this->_dateValidite = $dateValidite;
    }

    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    public function getLieuxStockage()
    {
        return $this->_lieuxStockage;
    }

    public function setLieuxStockage($lieuxStockage)
    {
        $this->_lieuxStockage = $lieuxStockage;
    }

    public function getCompteur()
    {
        return $this->_compteur;
    }

    public function setCompteur($compteur)
    {
        $this->_compteur = $compteur;
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
        foreach ($data as $key => $value)
        {
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
        return "Numéro du produit : " . $this->getNumero() . "\nDésignation du produit : " . $this->getDesignation() 
        . "\nPrix hors taxe" . $this->getPrixht() . "\nCouleur du produit : " . $this->getCouleur() 
        . "\nDate de validité du produit :" . $this->getDateValidite() . "\nCatégorie du produit" . $this->getCategorie()
        . "\nLieux de stockage du produit" . $this->getLieuxStockage() . "\n;
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