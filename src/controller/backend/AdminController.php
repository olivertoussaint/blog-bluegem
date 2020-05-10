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
        
        if (!isset($_GET['page'])) {
            $currentPage = 0;
        } else {
            if (isset($_GET['page']) && $_GET['page'] > 0) {
                $currentPage = ($_GET['page'] - 1) * $newsPerPage;
            }
        }
        $news = $authnewsManager->getNews($currentPage, $newsPerPage);
        $nbNews = $pagination -> getNewsPagination();
        $nbPage = $pagination -> getNewsPages($nbNews, $newsPerPage);

        require('src/view/backend/dashboardView.php');
    }

    function createNewsFeed() {

        require('src/view/backend/createNewsFeed.php');
    }

    function removeNews() {
        // TODO
    }

    function removeMember($memberId) {
        $accountManager = new accountManager();
    
        $deletedMember = $accountManager -> deleteMember($memberId);
    
        Header('Location: index.php?action=admin&remove-member=success');	
    }

   
}