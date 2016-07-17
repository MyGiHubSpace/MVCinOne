<?php
	namespace Library;
	class PDOFactory
	{
		public static function getMysqlConnexion()
		{
			$db = new \PDO('mysql:host=localhost;dbname={put your databas name}', '{username}', '{password}');
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			return $db;
		}
		public static function getPgsqlConnexion()
		{
			$db = new PDO('pgsql:host=localhost;dbname={put your databas name}', '{username}', '{password}');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}

		/*
			you can add others database configuration like Oracle,SQL Server, HF,...
		*/
	}