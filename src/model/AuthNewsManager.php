<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;


class AuthNewsManager extends Manager {

    public function getNews($currentPage, $newsPerPage) {
        $start   = ($currentPage-1)*$newsPerPage; // si currentPage =1 $start =0 si $currentPage =2 alors $start vaut 3
        $db      = $this->dbConnect();    
        $news    = $db->query('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news ORDER BY publication_date DESC LIMIT '.$start.','.$newsPerPage);
        
        return $news;  
    }

    public function getFeedNews($newsId)
	{
		$db      = $this->dbConnect();
		$req     = $db->prepare('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS edit_date_fr FROM news WHERE id_news = ?');
		$req     -> execute(array($newsId));
		$news    = $req->fetch();

		return $news;
	}

    public function editNewsFeed($title, $content, $author, $category, $id) 
    {
        $db              = $this->dbConnect();
        $editNewsFeed    = $db->prepare('UPDATE news SET news_title = ?, news_content = ?, author = ?, id_category = ?, publication_date = NOW() WHERE id = ?');
        $editedNewsFeed  = $editNewsFeed->execute(array($title, $content, $author, $category, $id));

        return $editedNewsFeed;
    }

    public function createFeedNews($title, $content, $author, $image, $category)
    {
        $db               = $this->dbConnect();
        $createFeedNews   = $db->prepare('INSERT INTO news (news_title, news_content, author, news_image, id_category, publication_date) VALUES ( ?, ?, ?, ?, ?, NOW())');
        $newFeedNews      = $createFeedNews->execute(array($title, $content, $author, $image, $category));

        return $newFeedNews; 
    }

    public function removeNewsFeed($newsId)
	{
		$db                = $this->dbconnect();
        $req               = $db->prepare('DELETE FROM news WHERE id = ?');
        $removedNewsFeed   = $req->execute(array($newsId));

        return $removedNewsFeed;
    }	
    
    public function deleteMember($memberId)
    {
        $db               = $this->dbConnect();
        $req              = $db->prepare('DELETE FROM members WHERE id = ?');
        $deletedMember    = $req -> execute(array($memberId));

        return $deletedMember;
    }

}