<?php

class Employe
{

    /*****************Attributs***************** */
    private $_Nom;
    private $_Prenom;
    private $_DateEmbauche;
    private $_PosteEntreprise;
    private $_Salaire;
    private $_Service;
    static private $_compteur = 0;
    private $_Agence;
    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_Nom;
    }

    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }
    public function getPrenom()
    {
        return $this->_Prenom;
    }

    public function setPrenom($Prenom)
    {
        $this->_Prenom = $Prenom;
    }
    public function getDateEmbauche()
    {
        return $this->_DateEmbauche;
    }

    public function setDateEmbauche(DateTime $DateEmbauche)
    {
        $this->_DateEmbauche = ($DateEmbauche);
    }

    public function getPosteEntreprise()
    {
        return $this->_PosteEntreprise;
    }

    public function setPosteEntreprise($PosteEntreprise)
    {
        $this->_PosteEntreprise = $PosteEntreprise;
    }

    public function getSalaire()
    {
        return $this->_Salaire;
    }

    public function setSalaire($Salaire)
    {
        $this->_Salaire = $Salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }

    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }

    public function getAgence()
    {
        return $this->_Agence;
    }

    public function setAgence($Agence)
    {
        $this->_Agence = $Agence;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_compteur++;
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

    public function toString()
    {
        return "\nNom : " . $this->getNom() . "\nPrenom : " . $this->getPrenom() . "\nDateEmbauche : " . $this->getDateEmbauche()->format('Y-m-d') . "\nPosteEntreprise : " . $this->getPosteEntreprise() . "\nSalaire annuel : " . $this->getSalaire() . "K\nService : " . $this->getService() . "\nAgence : " . $this->getAgence()->toString() . "\nChèque vacance : " . $this->ChequeVacance();

    }

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return Int
     */
    public function Anciennete()
    {
        // Date d'entrée dans la boite
        $dateActu= new DateTime ("now");
        $ancien = $dateActu->diff($this->getDateEmbauche(), true);
        return  $ancien->format ("%y")*1;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */

    private function primeSalaire()
    {
        return $this->getSalaireAnnuel() * 1000 * 0.05; // on retourne le montant de la prime annuelle
    }

    /**
     * methode pour pour calculer la prime d'ancienneté
     *
     * @return   double le montant de la prime d'ancienneté
     */
    private function primeAnciennete()
    {
        return $this->getSalaireAnnuel() * 1000 * 0.02 * $this->anciennete(); // on retourne le montant de la prime annuelle
    }

    /**
     * methode pour pour calculer la prime annuelle
     *
     * @return  double  le montant de la prime annuelle
     *
     *
     */
    public function prime()
    {
        return $this->primeSalaire() + $this->primeAnciennete(); // on retourne le montant de la prime annuelle
    }


    public function reporting()
    {

    }

    public function masseSalariale()
    {
        return $this->getSalaireAnnuel()*1000+ $this->prime();
    }

    public function ChequeVacance ()
    {
        if ($this->Anciennete() >= 1){
            return "Oui";
        }
        else 
        {
            return "Non";
        }
    }
  
}