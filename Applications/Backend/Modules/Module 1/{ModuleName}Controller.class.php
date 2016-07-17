<?php
	namespace Applications\Frontend\Modules\{ModuleName};
	class {ModuleName}Controller extends \Library\BackController
	{
		/*
			create your controller method here
		*/
		public function execute{Action}( \Library\HTTPRequest $request)
		{
			// Create the layout variable : $this->page->addVar('variableName',"value");

			//Exeample : $this->page->addVar('title',"Welcome on my site");

			// To call the manager method use : $this->managers->getManagerOf('ManagerName')->yourMethod()
			
			//Example : $this->managers->getManagerOf('Admins')->save(users);

			// To create an a session : $this->app->user()->setAttribute('YourSessionName','value')
			
			//Example : $this->app->user()->setAttribute('Pass','@pseudo');

			//To get session : $this->app->user()->getAttribute('YourSessionName');
			
			//example : $this->app->user()->getAttribute('Pass');

			//To test de post or get method : $request->getExists('inputName'), $request->postExists('inputName')

			//Example : $request->getExists('login'); $request->getExists('pwd');

			// To create an instance : $Arctualites = new \Library\Entities\actualites(array('EntityAttribute' => value);
			// It will be hydrated automaticaly to your entyties setters
			//Example : $Arctualites = new \Library\Entities\actualites(array('title' => $request->postData('title'),'content' => $request->postData('content')));
			
			// To redirect : $this->app->httpResponse()->redirect('YourUrl'); // url is defined in the route.xml file
			//example : $this->app->httpResponse()->redirect('Gestion');
		}
		
	}