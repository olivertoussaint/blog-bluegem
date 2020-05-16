<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;


class AuthNewsManager extends Manager {

    public function getNews($currentPage, $newsPerPage) {
        $db     = $this->dbConnect();    
        $news   = $db->query('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news ORDER BY publication_date DESC LIMIT '.$currentPage.' , '.$newsPerPage);
        
        return $news;  
    }

    public function getFeedNews($newsId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS edit_date_fr FROM news WHERE id = ?');
		$req -> execute(array($newsId));
		$news = $req->fetch();

		return $news;
	}

    public function updateFeedNews($title, $content, $author, $category, $id) 
    {
        $db = $this->dbConnect();
        $updateFeedNews = $db->prepare('UPDATE news SET news_title = ?, news_content = ?, author = ?, id_category = ?, publication_date = NOW() WHERE id = ?');
        $updatedNews = $updateFeedNews->execute(array($title, $content, $author, $category, $id));

        return $updatedNews;
    }

    public function createFeedNews($title, $content, $author, $image, $category)
    {
        $db = $this->dbConnect();
        $createFeedNews = $db->prepare('INSERT INTO news (news_title, news_content, author, news_image, id_category, publication_date) VALUES ( ?, ?, ?, ?, ?, NOW())');
        $newFeedNews = $createFeedNews->execute(array($title, $content, $author, $image, $category));

        return $newFeedNews; 
    }

    public function removeNewsFeed($newsId)
	{
		$db = $this->dbconnect();
        $req = $db->prepare('DELETE FROM news WHERE id = ?');
        $removedNewsFeed = $req->execute(array($newsId));

        return $removedNewsFeed;
	}	

}