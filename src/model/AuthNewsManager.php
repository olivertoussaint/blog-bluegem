<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;


class AuthNewsManager extends Manager {

    public function getNews() {
        $db     = $this->dbConnect();    
        $news   = $db->query('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news ORDER BY publication_date DESC LIMIT 0,15' );
        
        return $news;  
    }


}