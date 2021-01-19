<?php

class Departement{

	/*****************Attributs******************/

    private $_idDepartement;
    private $_libelleDepartement;
	private $_idRegion;
	
	
	/***************** Accesseurs ******************/

    public function getIdDepartement()
	{
		return $this->_idDepartement;
	}

	public function setIdDepartement(int $idDepartement)
	{
		$this->_idDepartement=$idDepartement;
    }
    
    public function getLibelleDepartement()
	{
		return $this->_libelleDepartement;
	}

	public function setLibelleDepartement($libelleDepartement)
	{
		$this->_libelleDepartement=$libelleDepartement;
    }
    
	public function getIdRegion()
	{
		return $this->_idRegion;
	}

	public function setIdRegion(int $idRegion)
	{
		$this->_idRegion=$idRegion;
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
		return "IdDepartement : ".$this->getIdDepartement()."LibelleDepartement : ".$this->getLibelleDepartement()."IdRegion : ".$this->getIdRegion()."\n";
	}
}