<?php

namespace Projet\controller\frontend;

require 'vendor/autoload.php';

use Projet\model\AccountManager;
use Projet\model\CommentManager;
use Projet\model\NewsManager;
use Projet\model\Pagination;


class UserController {
    
    function index() 
    {
        require ('src/view/frontend/homeView.php');
    }

    function listNews()
    {
        $newsPerPage = 3;
        $newsManager = new NewsManager();
        $pagination = new Pagination();


         if (!isset($_GET['page'])) {
            $currentPage = 0;
        } else {
            if (isset($_GET['page']) && $_GET['page'] > 0) {
                $currentPage = ($_GET['page'] - 1) * $newsPerPage;
            }
        }
        $news = $newsManager->getNews($currentPage, $newsPerPage);
        $nbNews = $pagination -> getNewsPagination();
        $nbPage = $pagination -> getNewsPages($nbNews, $newsPerPage);
          
        require('src/view/frontend/listNewsView.php');
    }

    function latestNews()
    {
        $newsManager = new NewsManager();
        $pagination = new Pagination();
        $commentManager = new CommentManager();  
        $newsFeed = $newsManager->latestNews($_GET['id']);
        // $news = $newsManager->getNews();
        $comments = $commentManager->getComments($_GET['id']);
        $nbComments = $commentManager->countNumberComments($_GET['id']);

        if (!empty($newsFeed)) {

        require('src/view/frontend/latestNewsView.php');

        } else {
            
           header('Location: index.php'); 
           exit;
        }
    }

    function addComment($newsId, $memberId, $comment)
    {
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
	
	function signUp() 
	{
		require('src/view/frontend/signUpView.php');
	}

	function signIn() 
	{
		require('src/view/frontend/signInView.php');
    }
    
    function profile()
    
    {
        
	   if (isset($_POST['save-user'])){
		echo"<pre>", print_r($_FILES['profileImage']['name']), "</pre>";
        // $bio = $_POST['bio'];
        $bio = htmlspecialchars($_POST['bio']);
	    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];
		$avatar_path = 'src/public/avatars/' . $profileImageName;

	    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $avatar_path)) {
		$msg = "Image téléchargée !";
        $css_class = "alert-success";

		} else {
				$msg = "erreur durant le téléchargement";
				$css_class = "alert-danger";
				}
			}
        
        require('src/view/frontend/profile.php');
    }    
    

	function addMember($pseudo, $password, $email) 
	{
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $accountManager = new AccountManager();
        $request = $accountManager -> controlSignUp($pseudo,$email);

        $result = $request->fetch();
        // If pseudo or email  already exist do an execption
        if($result['pseudo'] === $pseudo || $result['email'] === $email)
        {
            throw new \Exception('le pseudo ou le mail sont déjà utilisés.');
            
        } 
        
        else {
            
            $accountManager = new AccountManager();
            $result = $accountManager->createMember($pseudo, $email,$password);
            }      
    }
    
    function loginSubmit($pseudo, $password) {
        $accountManager = new AccountManager();
        $logMember = $accountManager -> loginMember($pseudo);
        $isPasswordCorrect = password_verify($_POST['password'], $logMember['password']);
        

        if (!$logMember) {

            header('Location: index.php');;
            exit;

        } else {
         if ($isPasswordCorrect) {
            $_SESSION['id'] = $logMember['id'];
            $_SESSION['pseudo'] = ucfirst(strtolower($pseudo));
            $_SESSION['role'] = $logMember['role'];

            header('Location: index?action=listNews');
              exit;

        } else {

            header('Location: index.php');
             exit;
        }
    }

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
        header('Location: latestNews.php');
        exit;
    }

    function countNewsComments() {
        $commentManager = new CommentManager();
        $commentManager->countNumberComments($_GET['id']);
        // $countComments = $commentManager->countNumberComments($newsId);

        require('src/view/frontend/latestNews.php');

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

