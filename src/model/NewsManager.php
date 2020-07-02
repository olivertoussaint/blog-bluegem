<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;

class NewsManager extends Manager {

    public function getNews($currentPage, $newsPerPage) 
    {
        $start  =($currentPage-1)*$newsPerPage; // si currentPage =1 $debut =0 si $currentPage =2 alors $debut vaut 3
        $db     = $this->dbConnect();    
        $news   = $db->query('SELECT news.id_news, news.news_title , news.news_content, news.author, members.pseudo, news.news_image, news.id_category, DATE_FORMAT(news.publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news inner join members on members.id = news.author ORDER BY publication_date DESC LIMIT '.$start.','.$newsPerPage);

        return $news;  
    }

    public function latestNews($newsId) 
    {
        $db           = $this->dbConnect();
		$req          = $db->prepare('SELECT id_news, news_title, news_content, news.author, members.pseudo, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS news_date_fr FROM news inner join members on members.id = news.author WHERE id_news = ?');
		$req          ->execute(array($newsId));
		$newsFeed     = $req->fetch();

		return $newsFeed;
    }

    public function updateNewsFeed($title, $content, $id_news )
    {
        $db                = $this->dbConnect();
        $updateFeedNews    = $db->prepare('UPDATE news SET news_title = ?, news_content = ?, author = ?, news_image = ?, id_category = ?,  publication_date = NOW() WHERE id_news = ?');
        $updatedNewsFeed   = $updateFeedNews->execute(array($title, $content, $id_news));

        return $updatedNewsFeed;
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

    public function DisplayNewsFeed()
    {
        $db                  = $this->dbConnect();
        $req                 = $db->prepare('SELECT news.id_news, news.news_title, news.news_content, news.author, news.news_image, news.id_category, DATE_FORMAT(news.publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS news_date_fr, categories.category_content FROM news INNER JOIN categories ON news.id_category = categories.id ORDER BY news.id_category ASC');
        $req                 ->execute(array());
        $displayNewsFeed     = $req->fetch();
        
        return $displayNewsFeed;

        
    } 

}