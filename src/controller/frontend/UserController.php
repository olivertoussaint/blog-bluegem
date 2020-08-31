<?php

namespace Projet\controller\frontend;

require 'vendor/autoload.php';

use Projet\model\AccountManager;
use Projet\model\CommentManager;
use Projet\model\NewsManager;
use Projet\model\Pagination;


class UserController {
    
    function index() {
        require ('src/view/frontend/homeView.php');
    }

    function listNews() {
        $newsPerPage = 3;
        $newsManager = new NewsManager();
        $pagination = new Pagination();

        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        } else {
            $currentPage = 1;
        }
               
        $news = $newsManager->getNews($currentPage, $newsPerPage);
        $nbNews = $pagination -> getNewsPagination();
        $pages = $pagination -> getNewsPages($nbNews, $newsPerPage);
    
        require('src/view/frontend/listNewsView.php');
    }

    function latestNews() {   
        $newsPerPage = 4;
        $newsManager = new NewsManager();
        $pagination = new Pagination();

        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        } else {
            $currentPage = 1;
        }
        $news = $newsManager->getNews($currentPage, $newsPerPage);
        $nbNews = $pagination -> getNewsPagination();
        $pages = $pagination -> getNewsPages($nbNews, $newsPerPage);

        $commentManager = new CommentManager();
        $newsFeed = $newsManager->latestNews($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);
        $nbComments = $commentManager->countNumberComments($_GET['id']);

        if (!empty($newsFeed)) {
        require('src/view/frontend/latestNewsView.php');

        } else {
            header('Location: index.php'); 
            exit;
        }
    }

    function addComment($newsId, $memberId, $comment) {
        $commentManager = new CommentManager();
        $displayComments  = $commentManager->newsComment($newsId, $memberId, $comment);
        if ($displayComments === false) {
            throw new \Exception('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=latestNews&id=' . $newsId);
            exit;
        }
        require('src/view/frontend/latestNewsView.php');
    }
	
    function signUp() {
		require('src/view/frontend/signUpView.php');
	}

	function signIn() {
		require('src/view/frontend/signInView.php');
    }
    function weather() {
        require('src/view/frontend/apiView.php');
    } 
    
    function updateProfile() {   
        $msg = "";
        $css_class ="";

	   if (isset($_POST['save_profile'])){
            $profileImageName = $_SESSION['id'].'_'.time() . '_' . $_FILES['profileImage']['name'];
            $target_dir = "src/public/avatars/";
            $target_file = $target_dir . basename($profileImageName) ;
        

	    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target_file)) {
            $accountManager = new AccountManager();
            $accountManager ->updateAvatar($profileImageName);
            $_SESSION['avatar'] = $profileImageName;

		    $msg = "Image téléchargée et insérée dans la base de données !";
            $css_class = "alert-success";
        } else {
            $msg ="erreur durant le téléchargement";
            $css_class = "alert-danger";
        }
    } else {
        $accountManager = new AccountManager();
        $member = $accountManager ->checkPseudo($_SESSION['pseudo']);      
    }
    require('src/view/frontend/profile.php');
    }    
    
    function addMember($pseudo, $password, $email) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        
        $accountManager = new AccountManager();
        $request = $accountManager -> controlSignUp($pseudo,$email);

        $result = $request->fetch();

        // If pseudo or email  already exist do an execption
        if($result['pseudo'] === $pseudo || $result['email'] === $email)
        {
            throw new \Exception('le pseudo et/ou le mail sont déjà utilisés.');
        } else {
            $accountManager = new AccountManager();
            $result = $accountManager->createMember($pseudo, $email,$password);
            }
            header('Location: index?action=signIn');
            exit();
    }

    
    function loginSubmit($pseudo, $password) {
        $accountManager = new AccountManager();
        $logMember = $accountManager -> loginMember($pseudo);
        $isPasswordCorrect = password_verify($_POST['password'], $logMember['password']);

        if (!$logMember) {
            header('Location: index.php');
            exit;

        } else {
         if ($isPasswordCorrect) {
            $_SESSION['id'] = $logMember['id'];
            $_SESSION['pseudo'] = ucfirst(strtolower($pseudo));
            $_SESSION['role'] = $logMember['role'];
            $_SESSION['avatar'] = $logMember['avatar'];

            header('Location: index?action=listNews');
              exit;

        } else {
            header('Location: index.php');
             exit;
        }
    }

    }

    function forgot_password() {
        if(isset($_POST['email'])) {
            $password = uniqid();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $message = "Bonjour, voici votre nouveau mot de passe : $password";
            $headers ='Content-Type: text/plain; charset="utf-8"'." ";

            if(mail($_POST['email'],'Mot de passe oublié', $message,$headers))
            {
                $accountManager = new AccountManager();
                $editedPassword = $accountManager->editPassword($hashedPassword);
                echo "Mail envoyé";
            } else {
                echo "Une erreur est survenue...";
            }
        }

        require('src/view/frontend/forgot_password.php');
    }

    function getForum() {  
            $newsManager = new NewsManager();
            $categories = $newsManager->getCategories();
            $subCategories = $newsManager->getSubCategories();
            require('src/view/frontend/forumView.php');
    }

    function getTopics() {
        if(isset($_GET['categorie']) AND !empty($_GET['categorie'])) {
            $id_categorie = htmlspecialchars($_GET['categorie']);
            
            if(isset($_GET['souscategorie']) AND !empty($_GET['souscategorie'])) {
                $id_souscategorie = htmlspecialchars($_GET['souscategorie']);
                $newsManager = new NewsManager();
                $topics = $newsManager->getTopic($id_categorie, $id_souscategorie);
                $topics .="AND f_subcategories.id = ?";
                $exec_array = array($id_categorie, $id_souscategorie);
                


            }else {
                $exec_array = array($id_categorie);
            }
            require('src/view/frontend/topicView.php'); 
        }
        else {
            // die('Erreur: Catégorie introuvable...');
            //je n'ai pas de categories que dois je faire ?
            //je récupère tout ou exception ?

        }

        // $commentManager = new CommentManager();
        // $comments = $commentManager->getTopicComments();
        
    }


    function newTopicForm() {
        require ('src/view/frontend/newTopicView.php');
    }

    function getNewTopic() {
        // $terror = "";
        if(isset($_SESSION['id'])) {
            if(isset($_POST['tsubmit'])) {
                if(isset($_POST['tsujet'],$_POST['tcontenu'])) {
                    $sujet = htmlspecialchars($_POST['tsujet']);
                    $contenu = htmlspecialchars($_POST['tcontenu']);
                    
                    if (!empty($sujet) AND !empty($contenu)) {
                        if(strlen($sujet) <=70) {
                            if(isset($_POST['tmail'])) {
                                $mail_notif = 1;
                            } else {
                                $mail_notif = 0;
                            }

                            $newsManager = new NewsManager();
                            $newTopic = $newsManager->getANewTopic($sujet,$contenu,$mail_notif);
                        } else {
                            $terror = "Votre sujet ne peut pas dépasser 70 caractères";
                        }
                    } else {
                        $terror = "Veuillez complétez tous les champs";
                    }
                }
            }
        } else {
            $terror = "Veuillez vous connecter pour poster un nouveau topic";
        }
        header('Location: index.php');
    }

	function logout() {
        session_start();
        session_destroy();
        header('Location: index.php');
        exit;
    }

    function newsReport($newsId) {
        $commentManager = new CommentManager();
        $reportedComment = $commentManager->reporting($newsId);
        header('Location: index.php?action=latestNews&id='. $newsId);
        exit;
    }

    function topicComments($topicId) {
        $commentManager = new CommentManager();
        $comments = $commentManager->getTopicComments($topicId);
        require('src/view/frontend/topicView.php');
    } 

    // function addTopicComment($id,$pseudo,$content) {
    //     $commentManager = new CommentManager();
    //     $topicComment = $commentManager->getTopicComments($id,$pseudo,$content);
    //     if ($topicComment === false) {
    //         throw new \Exception('Impossible d\'ajouter le commentaire !');
    //     } else {
            
    //         header('Location: index.php?action=topicView&id=' . $id);
    //          exit;
    //     }
        
    // }

    function countNewsComments() {
        $commentManager = new CommentManager();
        $commentManager->countNumberComments($_GET['id']);
        require('src/view/frontend/latestNews.php');
    }

    function newsPerTopic () {
        $newsManager = new NewsManager();
        
    }

    function mailTo() {
        require_once('src/model/credential.php');
        require('src/view/frontend/mail.php');
    }


    function termsOfUse() {
        require('src/view/frontend/termsOfUse.php');
    }

    function legalNotices() {
        require('src/view/frontend/legalNotices.php');
    }

    function contactMe() {
        require('src/view/frontend/contactMe.php');
    }

}

