<?php

class Region{

	/*****************Attributs******************/

	private $_idRegion;
	private $_libelleRegion;
	
	/***************** Accesseurs ******************/

	public function getIdRegion()
	{
		return $this->_idRegion;
	}

	public function setIdRegion(int $idRegion)
	{
		$this->_idRegion=$idRegion;
	}

	public function getLibelleRegion()
	{
		return $this->_libelleRegion;
	}

	public function setLibelleRegion($libelleRegion)
	{
		$this->_libelleRegion=$libelleRegion;
	}

	/***************** Constructeur ******************/

	public function __construct(array $options = [])
	{ 
		if (!empty($options))
		{
			$this->hydrate($options);
		}
	}

	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if (is_callable([$this, $method]))
			{
				$this->$method($value);
			}
		}
	}

	/***************** Autres méthodes ******************/

	public function toString()
	{
		return "IdRegion : ".$this->getIdRegion()."LibelleRegion : ".$this->getLibelleRegion()."\n";
	}
}