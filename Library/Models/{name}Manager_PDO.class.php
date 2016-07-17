<?php
	namespace Library\Models;
	/*
		Here you put your entities namespace

		example : use \Library\Entities\MyEntity;
	*/
	class {name}Manager_PDO extends AdminsManager
	{
		/*
			put here the {name}Manager class methode body for requesting the database
			exemple :
			public function getStatus($Mail) 
			{
				$requete = $this->dao->prepare('SELECT COUNT(adminID) AS nbr FROM  t_admin WHERE adminMail=:adminMail GROUP BY adminID');
					$requete->bindValue(':adminMail', htmlspecialchars($Mail,ENT_QUOTES), \PDO::PARAM_STR);
					return $requete->execute()?$result=$requete->fetch();else false;
					
			}
		*/
	}