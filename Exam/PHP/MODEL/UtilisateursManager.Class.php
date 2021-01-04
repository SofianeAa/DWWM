<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (pseudo,nomUtilisateur,prenomUtilisateur,motDePasse,role,idMatiere) VALUES (:pseudo,:nomUtilisateur,:prenomUtilisateur,:motDePasse,:role,:idMatiere)");
		$q->bindValue(":pseudo", $obj->getPseudo());
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":role", $obj->getRole());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateurs SET idUtilisateur=:idUtilisateur,pseudo=:pseudo,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,motDePasse=:motDePasse,role=:role,idMatiere=:idMatiere WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":pseudo", $obj->getPseudo());
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":role", $obj->getRole());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
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
		$q=$db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur =".$id);
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

	public static function findByPseudo($pseudo)
    {
		$db = DbConnect::getDb();
        if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
            $q = $db->query("SELECT * FROM Utilisateurs WHERE pseudo ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Utilisateurs($results);
            }
            else
            {
                return false;
            }}
        else
        {
            return false;
        }
    }
}