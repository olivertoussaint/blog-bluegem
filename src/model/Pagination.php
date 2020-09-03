<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;

class Pagination extends Manager {

    /**
     * Cette méthode compte le nombre d'articles 
     *
     * @return int
     */
    public function getNewsPagination() {
        $db        = $this->dbConnect();
        $totalNews = $db->query('SELECT COUNT(id_news) AS nbNews FROM news');
   
        return $totalNews->fetch()['nbNews'];
    }
    /**
     * Cette méthode calcule le nombre d'articles/par page
     *
     * @param [int] $nbNews
     * @param [int] $newsPerPage
     * @return int
     */
    public function getNewsPages($nbNews, $newsPerPage) {
        $pages = ceil($nbNews/$newsPerPage);

        return $pages;
    }

}