<?php

class Monstredifficile
{

    /*****************Attributs***************** */

    /*****************Accesseurs***************** */

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
     * @return String.
     */
    public function toString()
    {
        return $this->attaqueMonstreDifficile() . $this->sortMagique();
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
    //Lancé des jets pour le joueur et le monstre avec un random
    public function attaqueMonstreDifficile()
    {
        $joueur == LanceLeDe();
        $monstre == LanceLeDe();

        if ($monstre > $joueur) {
            echo true;
        }
    }
    // Si le monstre réussi son attaque, il aura alors un sortMagique en plus souf si il fait 6 au jet de dé
    public function sortMagique()
    {

        $magie == lanceLeDe();
        if ($magie != 6) {
            return $magie * 5;
		}
		else {
			return 0;		}

    }

}
