<?php
	namespace Library;
	session_start();
	class User extends ApplicationComponent
	{
		
		// Set session variable : $att must be session varible name, and $value the value
		public function setAttribute($attr, $value)
		{
			$_SESSION[$attr] = $value;
		}
		

		public function getAttribute($attr)
		{
			return isset($_SESSION[$attr]) ? $_SESSION[$attr] : null;
		}
		//Message flash
		public function getFlash()
		{
			$flash = $_SESSION['flash'];
			unset($_SESSION['flash']);
			return $flash;
		}
		//test Message flash
		public function hasFlash()
		{
			return isset($_SESSION['flash']);
		}
		
		public function isAuthenticated()
		{
			return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
		}
		
		public function setAuthenticated($authenticated = true)
		{
			if (!is_bool($authenticated))
			{
				throw new \InvalidArgumentException('La valeur spécifiée à la méthode User::setAuthenticated() doit être un boolean');
			}
			$_SESSION['auth'] = $authenticated;
		}
		
		public function setFlash($value)
		{
			$_SESSION['flash'] = $value;
		}

		static function  vidersession()
		{
			foreach($_SESSION as $cle=>$element)
			{
				unset($_SESSION[$cle]);
			}
		}
		//Desroy sessions 
		public function UserDestroy()
		{
			self::vidersession();
			session_destroy();
		}
	}