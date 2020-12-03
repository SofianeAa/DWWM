<?php
class DbConnect{
	private static $db;

	public static function getDb()
	{
		return DbConnect::$db;
	}

	public static function init()
	{
		try {
			// On se connecte � MySQL
            //self::$db= new PDO ( 'mysql:host=localhost;dbname=baseProduits;charset=utf8', 'produitsApp', 'produitsApp');
			self::$db = new PDO('mysql:host=' . Parametre::getHost() . ';port=' . Parametre::getPort() . ';dbname=' . Parametre::getDbname() . ';charset=utf8', Parametre::getLogin(), Parametre::getPwd());
			echo "connexion réussie";
		}
		catch (Exception $e)
		{
			die('Erreur :'. $e->getMessage());
		}
	}
}