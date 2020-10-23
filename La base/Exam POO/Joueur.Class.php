<?php



class Joueur extends De
{

    /*****************Attributs***************** */

	private $_nom;

    /*****************Accesseurs***************** */
	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}
    /*****************Constructeur***************** */

    public function pointDeVie()
    {
        return 50;
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

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String.
     */
    public function toString()
    {
        return "Nom : " . $this->getNom() . $this->heroVivant() . $this->attaqueHero() . $this->subitDegats() . $this->bouclier();
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
    public function compareTo($obj1, $obj2)
    {
        return 0;
    }
    // Fonction vérifiant si le joueur est toujours vivant
    public function heroVivant()
    {
        if (pointDeVie() > 0) {
            return true;
        }
    }
    // Fonction effectuant les jets d'attaque pour le tour du joueur.
    public function attaqueHero()
    {
        $joueur == lanceLeDe();
        $monstre == lanceLeDe();

        if ($joueur >= $monstre) {
            echo true;
        }
    }
    // Fonction lançant un random pour voir si le joueur va prendre les degats
    public function bouclier()
    {
        $bouclier == (lanceLeDe());
        if ($bouclier <= 2) {
            return true;
        }
    }
    // fonction infligeant les degats au héro
    public function subitDegats()
    {
        return pointDeVie() - 10;
    }
}
