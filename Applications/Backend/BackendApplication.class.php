<?php 
	namespace Applications\Backend;
	class BackendApplication extends \Library\Application
	{
		public function __construct()
		{
			parent::__construct();
			$this->name = 'Backend';
		}
		public function run()
		{
			$controller = $this->getController(); // creer un objet de specifique du module (sa route exemple NewsController), une fois la route cible on peut exceuter l'action voulue (exemple: index: exceuteindex)
			//echo $controller;
			$controller->execute(); // cette ligne permet d'excecuter l action associé au module (exemple excuteIndex() du module News defini dans le fichier NewsController
			
			$this->httpResponse->setPage($controller->page()); // creer un objet caracterisant la page a affiche
			$this->httpResponse->send();
		}
	}