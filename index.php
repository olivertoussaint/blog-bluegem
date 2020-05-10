<?php
session_start();

require 'vendor/autoload.php';

use Projet\controller\backend\AdminController;
use Projet\controller\frontend\UserController;


try {
	if (isset($_GET['action']))	{
		if ($_GET['action'] == 'listNews') {			
			$controller = new UserController();
		    $controller -> listNews();

		} elseif ($_GET['action'] == 'latestNews') {
			if (isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {
				$controller = new UserController();
				$controller -> latestNews();
			}
			else {
				throw new Exception('Aucun identifiant de news envoyé');
			}
		
		} elseif ($_GET['action'] == 'addMember') {
			if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {

				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
						if ($_POST['password'] == $_POST['passwordConfirm']) {
					
					$controller = new UserController();
					$controller -> addMember(strip_tags($_POST['pseudo']), strip_tags($_POST['password']), strip_tags($_POST['email']));
				}
				else {
						throw new Exception('Les deux mots de passe ne correspondent pas.');
				}
		} else {
				  throw new Exception('Pas d\'adresse email valide.');
		}
	} else {
			  throw new Exception('Tous les champs ne sont pas remplis !');
	}

		} elseif ($_GET['action'] == 'updateProfile') {
			// $msg = "";
            // $css_class = "";
			$controller = new UserController();
			$controller -> updateProfile($_SESSION['id']);
			
		} elseif ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (isset($_SESSION['id']) && !empty($_POST['comment'])) {
					$controller = new UserController();
					$controller ->addComment($_GET['id'], $_SESSION['id'], $_POST['comment']);

				} else {
					throw new Exception('Tous les champs doivent être remplis !');
					}
				} else {
				  throw new Exception('Aucun identifiant de billet envoyé');
		}  

		} elseif ($_GET['action'] == 'loginSubmit') {
			$controller = new UserController();
			$controller -> loginSubmit(strip_tags($_POST['pseudo']), strip_tags($_POST['password']));

		} elseif ($_GET['action'] == 'signIn') {
			$controller = new UserController();
			$controller -> signIn();

		} elseif ($_GET['action'] == 'signUp') {
			$controller = new UserController();
			$controller -> signUp();
		
		} elseif ($_GET['action'] == 'reporting') {
			$controller = new UserController();
			$controller -> newsReport($_GET['id'], $_SESSION['pseudo']);

		} elseif ($_GET['action'] == 'admin') {
			if (isset($_SESSION['pseudo']) && ($_SESSION['role'] == '1')) {
				$adminController = new AdminController();
				$adminController -> admin();
			}else{
				throw new Exception('Vous n\'êtes pas autorisé à accéder à cette partie du site');
                header("Location: index.php");
                exit;            
			}
		} elseif ($_GET['action'] == 'createNewsFeed') {
			if (isset($_SESSION['pseudo']) && ($_SESSION['role'] == '1')) {
				$adminController = new AdminController();
				$adminController -> createNewsFeed();
			} else {
				throw new Exception('Vous n\'êtes pas autorisé à accéder à cette partie du site');
				header("Location: index.php");
				exit;
			}

		} elseif ($_GET['action'] == 'updateNews') {			
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (isset($_SESSION) && ($_SESSION['role'] == '1')) {
				$adminController = new AdminController();	
				$adminController ->updatedNews($title, $content, $author, $category, $id); 
				}  
	        } else {
				throw new Exception('Vous n\'êtes pas autorisé à accéder à cette partie du site');
				header("Location: index.php");
				exit;
			}

		} elseif ($_GET['action'] == 'validateComment') {
			$controller = new UserController();
			// $controller -> newsReport();
			
		}  elseif ($_GET['action'] == 'deleteNews') {
			$adminController = new AdminController();
			$adminController -> removeNews($_GET['id']);// ADMIN


		} elseif ($_GET['action'] == 'deleteMember') {
			$adminController = new AdminController();
			$adminController -> removeMember($_GET['id']);// ADMIN

		} elseif ($_GET['action'] == 'termsOfUse') {
			$controller = new UserController();
			$controller -> termsOfUse();

		} elseif ($_GET['action'] == 'logout') {
			$controller = new UserController();
			$controller -> logout();
		
		} elseif ($_GET['action'] == 'legalNotices') {
			$controller = new UserController();
			$controller -> legalNotices();

		} elseif ($_GET['action'] == 'contactMe') {
			$controller = new UserController();
			$controller -> contactMe();
		}
	} else 
	{
		$controller = new Usercontroller;
		$controller -> index();
	}
}

catch (Exception $e) 
{
    die('Erreur : '.$e->getMessage());
    
}