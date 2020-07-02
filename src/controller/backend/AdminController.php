<?php

namespace Projet\controller\backend;

require 'vendor/autoload.php';

use Projet\model\AccountManager;
use Projet\model\CommentManager;
use Projet\model\AuthNewsManager;
use Projet\model\Pagination;

class AdminController {

    function admin() {
        $newsPerPage = 6;
        $accountManager = new AccountManager();
        $authnewsManager = new AuthNewsManager();
        $commentManager = new CommentManager();
        $comments = $commentManager->getReporting();
        $members = $accountManager->getMembers();
        $pagination = new Pagination();        
        
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }

        $news = $authnewsManager->getNews($currentPage, $newsPerPage);
        $nbNews = $pagination -> getNewsPagination();
        $pages = $pagination -> getNewsPages($nbNews, $newsPerPage);

        require('src/view/backend/dashboardView.php');
    }

    function displayUpdate() {
        $authnewsManager = new AuthNewsManager();
        $news = $authnewsManager->getFeedNews($_GET['id']);
        require('src/view/backend/editNewsFeed.php');
    }

    function createNewsFeed() {

        require('src/view/backend/createNewsFeed.php');
    }

    function editedNewsFeed($title, $content, $author, $category, $id) {
        $authnewsManager = new AuthNewsManager();
        $editedNewsFeed = $authnewsManager -> editNewsFeed($title, $content, $author, $category, $id);

        if ($editedNewsFeed === false) {
            throw new \Exception('Impossible de modifier le chapitre !');
        } else {
            header('Location: index.php?action=admin');
            exit;
        }

    }

    function removeNewsFeed($newsId) {
        $authnewsManager = new AuthNewsManager();
        $removedNewsFeed = $authnewsManager -> removeNewsFeed($newsId);

        header('Location: index.php?action=admin');
        exit;
        
    }

    function removeComment($commentId) {
        $commentManager = new CommentManager();
        $deletedComment = $commentManager->deleteComment($commentId);

        header('Location: index.php?action=admin&delete-comment=success');
		 exit;
        
    }

    function approveComment($newsId) {
        $commentManager = new CommentManager();
        $approvedComment = $commentManager -> validatecomment($newsId);
        
        header('Location: index.php?action=admin&approve-comment=success');
		 exit;

    }

    function removeMember($memberId) {
        $authnewsManager = new AuthNewsmanager();   
        $deletedMember = $authnewsManager -> deleteMember($memberId);
    
        header('Location: index.php?action=admin&remove-member=success');
        exit;	
    }

   
}