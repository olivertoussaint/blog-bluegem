<?php

namespace Projet\controller;

class UserController {
	
	function signUp() 
	{
		require('src/view/frontend/signUpView.php');
	}

	function signIn() 
	{
		require('src/view/frontend/signInView.php');
	}

	function register() 
	{
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password'],PASSWORD_DEFAULT);

        $accountManager = new \Project\Model\AccountManager();
        $request= $accountManager->controlRegister($pseudo,$email);

        $result = $request->fetch();
        // Si le pseudo ou le email existe déjà faire une exception
        if($result['pseudo'] === $pseudo || $result['email'] === $email)
        {
            echo '<h3 class="error">Erreur : Pseudo ou Email déja existant </h3>';
            $userController= new \Project\Controller\UserController();
            $userController->signUp();

        } else {
        	

        }       
	}


	function logout() {

        session_start();
        $_SESSION = array();
        session_destroy();

    }

}

