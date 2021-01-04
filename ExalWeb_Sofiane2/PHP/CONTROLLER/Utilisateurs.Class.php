<?php

class Utilisateurs 
{

    /*****************Attributs***************** */
    
    private $_idUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;
    private $_role;
    private $_idMatiere;
    private $_pseudo;
    private $_motDePasse;

	/***************** Accesseurs ***************** */

    public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur=$idUtilisateur;
    }
    
    public function getNomUtilisateur()
	{
		return $this->_nomUtilisateur;
	}

	public function setNomUtilisateur($nomUtilisateur)
	{
		$this->_nomUtilisateur=$nomUtilisateur;
	}

	public function getPrenomUtilisateur()
	{
		return $this->_prenomUtilisateur;
	}

	public function setPrenomUtilisateur($prenomUtilisateur)
	{
		$this->_prenomUtilisateur=$prenomUtilisateur;
    }
    
    public function getRole()
	{
		return $this->_role;
	}

	public function setRole($role)
	{
		$this->_role=$role;
    }
    
    public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
    }
    
    public function getPseudo()
	{
		return $this->_pseudo;
	}

	public function setPseudo($pseudo)
	{
		$this->_pseudo=$pseudo;
    }
    
    public function getMotDePasse()
	{
		return $this->_motDePasse;
	}

	public function setMotDePasse($motDePasse)
	{
		$this->_motDePasse=$motDePasse;
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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdUtilisateur : ".$this->getIdUtilisateur()."Pseudo : ".$this->getPseudo()."NomUtilisateur : ".$this->getNomUtilisateur()."PrenomUtilisateur : ".$this->getPrenomUtilisateur()."MotDePasse : ".$this->getMotDePasse()."Role : ".$this->getRole()."IdMatiere : ".$this->getIdMatiere()."\n";
	}


}