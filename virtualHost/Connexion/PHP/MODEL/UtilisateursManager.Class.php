<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, roleUtilisateur, pseudo) VALUES (:nomUtilisateur, :prenomUtilisateur, :motDePasse, :adresseMail, :roleUtilisateur, :pseudo)");
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":adresseMail", $obj->getAdresseMail());
		$q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
		$q->bindValue(":pseudo", $obj->getPseudo());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateurs SET idUtilisateur=:idUtilisateur,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,motDePasse=:motDePasse,adresseMail=:adresseMail,roleUtilisateur=:roleUtilisateur,pseudo=:pseudo  WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":adresseMail", $obj->getAdresseMail());
		$q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
		$q->bindValue(":pseudo", $obj->getPseudo());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" .$obj->getIdUtilisateur());
	}
	
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Categories WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}
}