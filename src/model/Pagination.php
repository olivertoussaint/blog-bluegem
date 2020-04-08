<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;

class Pagination extends Manager {
    
    public function getNewsPagination() {
        $db = $this->dbConnect();
        $totalNews = $db->query('SELECT COUNT(id_news) AS nbNews FROM news');
   
        return $totalNews->fetch()['nbNews'];
    }

    public function getNewsPages($nbNews, $newsPerPage) {
        $nbPage = ceil($nbNews/$newsPerPage);

        return $nbPage;
    }

}