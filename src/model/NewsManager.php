<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;

class NewsManager extends Manager {

    public function getNews($currentPage, $newsPerPage) 
    {
        $db     = $this->dbConnect();    
        $news   = $db->query('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news ORDER BY publication_date DESC LIMIT '.$currentPage.' , '.$newsPerPage);
        
        return $news;  
    }

    public function latestNews($newsId) 
    {
        $db           = $this->dbConnect();
		$req          = $db->prepare('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS news_date_fr FROM news WHERE id_news = ?');
		$req->execute(array($newsId));
		$newsFeed     = $req->fetch();

		return $newsFeed;
    }

    public function updateANews($title, $content, $author, $image, $category,  $id_news )
    {
        $db                = $this->dbConnect();
        $updateFeedNews    = $db->prepare('UPDATE news SET news_title = ?, news_content = ?, author = ?, news_image = ?, id_category = ?,  publication_date = NOW() WHERE id_news = ?');
        $updatedNews       = $updateFeedNews->execute(array($title, $content, $author, $image, $category, $id_news));

        return $updatedNews;
    }

    public function createNewsFeed($title, $content) 
    {
        $db                 = $this->dbConnect();
        $createNewsFeed     = $db->prepare('INSERT INTO news (news_title, news_content, publication_date) VALUES ( ?, ?, NOW())');
        $createdNewsFeed    = $createNewsFeed->execute(array($title, $content));

        return $createdNewsFeed ;
    }

    public function deleteNews($newsId)
    {
        $db             = $this->dbConnect();
        $req            = $db->prepare('DELETE FROM news WHERE id_news = ?');
        $deletedNews    = $req->execute(array($newsId));

        return $deletedNews;
    }
}