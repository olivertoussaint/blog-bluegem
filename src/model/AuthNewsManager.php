<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;


class AuthNewsManager extends Manager {

    /**
     * Fonction qui affiche les articles et la pagination
     *
     * @param [int] $currentPage
     * @param [int] $newsPerPage
     * @return string|int
     */
    public function getNews($currentPage, $newsPerPage) {
        $start   = ($currentPage-1)*$newsPerPage; // si currentPage =1 $start =0 si $currentPage =2 alors $start vaut 3
        $db      = $this->dbConnect();    
        $news    = $db->query('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news ORDER BY publication_date DESC LIMIT '.$start.','.$newsPerPage);
        
        return $news;  
    }

    /**
     * Fonction affichant un fil d'actualité et son ID
     *
     * @param [int] $newsId
     * @return int
     */
    public function getFeedNews($newsId)
	{
		$db      = $this->dbConnect();
		$req     = $db->prepare('SELECT id_news, news_title, news_content, author, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS edit_date_fr FROM news WHERE id_news = ?');
		$req     -> execute(array($newsId));
		$news    = $req->fetch();

		return $news;
	}

    /**
     * Fonction modification de l'article
     *
     * @param [string] $title
     * @param [string] $content
     * @param [string] $author
     * @param [string] $category
     * @param [int] $id
     * @return string|int
     */
    public function editNewsFeed($title, $content, $author, $category, $id) 
    {
        $db              = $this->dbConnect();
        $editNewsFeed    = $db->prepare('UPDATE news SET news_title = ?, news_content = ?, author = ?, id_category = ?, publication_date = NOW() WHERE id = ?');
        $editedNewsFeed  = $editNewsFeed->execute(array($title, $content, $author, $category, $id));

        return $editedNewsFeed;
    }

    /**
     * Fonction création d'un nouvel article
     *
     * @param [string] $title
     * @param [string] $content
     * @param [string] $author
     * @param [string] $image
     * @param [int] $category
     * @return string|int
     */
    public function createFeedNews($title, $content, $author, $image, $category)
    {
        $db               = $this->dbConnect();
        $createFeedNews   = $db->prepare('INSERT INTO news (news_title, news_content, author, news_image, id_category, publication_date) VALUES ( ?, ?, ?, ?, ?, NOW())');
        $newFeedNews      = $createFeedNews->execute(array($title, $content, $author, $image, $category));

        return $newFeedNews; 
    }

    /**
     * Fonction suppression d'un fil d'actualité 
     *
     * @param [int] $newsId
     * @return int
     */
    public function removeNewsFeed($newsId)
	{
		$db                = $this->dbconnect();
        $req               = $db->prepare('DELETE FROM news WHERE id = ?');
        $removedNewsFeed   = $req->execute(array($newsId));

        return $removedNewsFeed;
    }	
    
    /**
     * Fonction suppession d'un membre
     *
     * @param [int] $memberId
     * @return int
     */
    public function deleteMember($memberId)
    {
        $db               = $this->dbConnect();
        $req              = $db->prepare('DELETE FROM members WHERE id = ?');
        $deletedMember    = $req -> execute(array($memberId));

        return $deletedMember;
    }

}