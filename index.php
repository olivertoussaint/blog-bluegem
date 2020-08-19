<?php
session_start();

require 'vendor/autoload.php';

use Projet\controller\backend\AdminController;
use Projet\controller\frontend\UserController;
use Projet\model\NewsManager;

try {
	if (isset($_GET['action']))	{
		if ($_GET['action'] == 'listNews') {			
			$controller = new UserController();
		    $controller -> listNews();

		} elseif ($_GET['action'] == 'latestNews') {
			if (isset($_GET['id']) && $_GET['id'] > 0 && is_numeric($_GET['id'])) {
				$controller = new UserController();
				$controller -> latestNews();
			} else {
				throw new Exception('Aucun identifiant de news envoyé');
			}

		} elseif ($_GET['action'] == 'addMember') {
			if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					if ($_POST['password'] == $_POST['passwordConfirm']) {
						$controller = new UserController();
						$controller -> addMember(strip_tags($_POST['pseudo']), strip_tags($_POST['password']), strip_tags($_POST['email']));
				} else {
					throw new Exception('Les deux mots de passe ne correspondent pas.');
				}
			} else {
				throw new Exception('Pas d\'adresse email valide.');
			}
		} else {
			throw new Exception('Tous les champs ne sont pas remplis !');
		}

		} elseif ($_GET['action'] == 'updateProfile') {
		$controller = new UserController();
		$controller -> updateProfile($_SESSION['id']);

		} elseif ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (isset($_SESSION['id']) && !empty($_POST['comment'])) {
					$controller = new UserController();
					$controller -> addComment($_GET['id'], $_SESSION['id'], $_POST['comment']);
				} else {
					throw new Exception('Tous les champs doivent être remplis !');
				}
				} else {
				  throw new Exception('Aucun identifiant de billet envoyé');
				}  

		} elseif ($_GET['action'] == 'addTopicComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (isset($_SESSION['id']) && !empty($_POST['comment'])) {
			$controller = new UserController();
			// $controller -> addTopicComment($_GET['id'], $_SESSION['id'], $_POST['comment']);

				} else {
					throw new Exception('Tous les champs doivent être remplis !');
				}
			} else {
				throw new Exception('Aucun identifiant de topic envoyé');
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
		
		} elseif ($_GET['action'] == 'forgot_password') {
			$controller = new UserController();
			$controller -> forgot_password();
		
		} elseif ($_GET['action'] == 'reporting') {
			$controller = new UserController();
			$controller -> newsReport($_GET['id'], $_GET['id_news'], $_SESSION['pseudo']);

		} elseif ($_GET['action'] == 'topic_comment') {
			$controller = new UserController();
			$controller -> topicComments($_GET['id_topic']);

		} elseif ($_GET['action'] == 'forgot_password') {
			$controller = new UserController();
			$controller -> forgot_password();
			
		}elseif ($_GET['action'] == 'weather_api') {
			$controller = new Usercontroller();
			$controller -> weather();
			
		} elseif ($_GET['action'] == 'forum') {
			$controller = new UserController();
			$controller -> getForum();		

		} elseif ($_GET['action'] == 'topic') {
			
				$controller = new UserController();
				$controller -> getTopic();


		} elseif ($_GET['action'] == 'newTopicForm'){
			
				$controller = new UserController();
				$controller -> newTopicForm();
	
		} elseif ($_GET['action'] == 'newTopic') {
			$controller = new UserController();
			$controller -> getNewTopic();

		} elseif ($_GET['action'] == 'admin') {
			$adminController = new AdminController();
			$adminController -> admin();

		} elseif ($_GET['action'] == 'createNewsFeed') {
			if (isset($_SESSION['pseudo']) && ($_SESSION['role'] == '1')) {
				$adminController = new AdminController();
				$adminController -> createNewsFeed();
			} else {
				throw new Exception('Vous n\'êtes pas autorisé à accéder à cette partie du site');
				header("Location: index.php");
				exit;
			}

		} elseif ($_GET['action'] == 'newsFeedUpdate'){	
			if (isset($_GET['id'])&&($_GET['id'] > 0)) {
				$newsManager = new NewsManager();
				$newsManager -> updateNewsFeed($_POST['news_title'], $_POST['mytextarea'],$_GET['id']);
			}

		} elseif ($_GET['action'] == 'editNewsFeed') {			
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (isset($_SESSION) && ($_SESSION['role'] == '1')) {
				$adminController = new AdminController();	
				$adminController ->displayUpdate(); 
				}  
	        } else {
				throw new Exception('Vous n\'êtes pas autorisé à accéder à cette partie du site');
			}

		} elseif ($_GET['action'] == 'validateComment') {
			$adminController = new AdminController();
			$adminController -> approveComment($_GET['id'], $_SESSION['pseudo']);//ADMIN
			
		}  elseif ($_GET['action'] == 'deleteComment') {
			$adminController = new AdminController();
			$adminController -> removeComment($_GET['id']);//ADMIN	
		
		}	elseif ($_GET['action'] == 'removeNewsFeed') {
			$adminController = new AdminController();
			$adminController -> removeNewsFeed($_GET['id']);// ADMIN

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
	} else {
		$controller = new Usercontroller;
		$controller -> index();
	}
}

catch (Exception $e) 
{
    die('Erreur : '.$e->getMessage());
    
}