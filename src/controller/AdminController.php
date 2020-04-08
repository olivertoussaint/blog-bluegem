<?php

namespace Projet\controller\backend;

require 'vendor/autoload.php';

use Projet\model\AccountManager;
use Projet\model\CommentManager;
use Projet\model\AuthNewsManager;

class AdminController {
    function admin() {
        $accountManager = new AccountManager();
        $authnewsManager = new AuthNewsManager();
        $commentManager = new CommentManager();
        $news = $authnewsManager->getNews();
        $comments = $commentManager->getReporting();
        $members = $accountManager->getMembers();

        require('src/view/backend/dashboardView.php');
    }

}