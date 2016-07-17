<?php
	function autoload($class)
	{
		//echo '../'.str_replace('\\', '/', $class).'.class.php';
		require '../'.str_replace('\\', '/', $class).'.class.php';	
	}
	
	spl_autoload_register('autoload');
