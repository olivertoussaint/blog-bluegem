<?php
session_start();

require_once __DIR__.'/vendor/autoload.php';

use Projet\controller\UserController;


try {
	if (isset($_GET['action']))	{	
		if ($_GET['action'] == 'signIn') { 
			$controller = new UserController();
			$controller -> signIn();
		} elseif ($_GET['action'] == 'signUp') {
			$controller = new UserController();
			$controller -> signUp();
		}
	} else // si je n'ai pas de $_GET ['action']
	{
		require ('src/view/frontend/homeView.php');

	}
}

catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('src/view/frontend/errorView.php');
}