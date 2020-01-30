<?php

namespace Projet\controller;

class AllUserController {
	
	function signUp() {
		require('src/view/frontend/signUpView.php');
	}

	function signIn() {
		require('src/view/frontend/signInView.php');
	}
}