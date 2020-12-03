<?php

class Utilisateurs
{

	/*****************Attributs***************** */

    private $_idUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;
    private $_motDePasse;
    private $_adresseMail;
    private $_roleUtilisateur;
    private $_pseudo;

	/***************** Accesseurs ***************** */


	public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->_idUtilisateur = $idUtilisateur;
    }

    public function getNomUtilisateur()
    {
        return $this->_nomUtilisateur;
    }

    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->_nomUtilisateur = $nomUtilisateur;
    }

    public function getPrenomUtilisateur()
    {
        return $this->_prenomUtilisateur;
    }

    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->_prenomUtilisateur = $prenomUtilisateur;
    }

    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->_motDePasse = $motDePasse;
    }

    public function getAdresseMail()
    {
        return $this->_adresseMail;
    }

    public function setAdresseMail($adresseMail)
    {
        $this->_adresseMail = $adresseMail;
    }

    public function getRoleUtilisateur()
    {
        return $this->_roleUtilisateur;
    }

    public function setRoleUtilisateur($roleUtilisateur)
    {
        $this->_roleUtilisateur = $roleUtilisateur;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
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
		return "IdUtilisateur : ".$this->getIdUtilisateur()."nomUtilisateur : ".$this->getNomUtilisateur()."prenomUtilisateur : ".$this->getPrenomUtilisateur()."motDePasse : ".$this->getMotDePasse()."adresseMail : ".$this->getAdresseMail()."roleUtilisateur : ".$this->getRoleUtilisateur()."pseudo : ".$this->getPseudo()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
