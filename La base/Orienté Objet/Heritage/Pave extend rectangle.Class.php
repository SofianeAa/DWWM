<?php

class Pave extends Rectangle
{

	/*****************Attributs***************** */

private $_perimetre;
private $_volume;

	/*****************Accesseurs***************** */

public function getPerimetre()
{
	return $this->_perimetre;
}

public function setPerimetre($perimetre)
{
	$this->_perimetre = $perimetre;
}

public function getVolume()
{
	return $this->_volume;
}

public function setVolume($volume)
{
	$this->_volume = $volume;
}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{	parent::__construct ($option);
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
	* @return String.
	*/
	public function toString()
	{
		return "Perimetre :".$this->getPerimetre()."\n"
		."Volume :".$this->getVolume()."\n"
		;
	}
	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo ($obj)
	{
		return true;
	}
	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*		0 si ils sont égaux
	*		-1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return void
	*/
	public function compareTo ($obj1, $obj2)
	{
		return 0;
	}
}