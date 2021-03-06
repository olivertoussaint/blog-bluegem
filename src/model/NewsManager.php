<?php

namespace Projet\model;

require 'vendor/autoload.php';
use Projet\model\Manager;

class NewsManager extends Manager {

    /**
     * Fonction qui affiche les articles et la pagination
     *
     * @param [int] $currentPage
     * @param [int] $newsPerPage
     * @return string|int
     */
    public function getNews($currentPage, $newsPerPage) 
    {
        $start  = ($currentPage-1)*$newsPerPage;
        $db     = $this->dbConnect();    
        $news   = $db->query('SELECT news.id_news, news.news_title , news.news_content, news.author, members.pseudo, news.news_image, news.id_category, DATE_FORMAT(news.publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM news inner join members on members.id = news.author ORDER BY publication_date DESC LIMIT '.$start.','.$newsPerPage);

        return $news;  
    }

    /**
     * Fonction qui affiche l'article à l'aide de son ID
     *
     * @param [int] $newsId
     * @return string|int 
     */
    public function latestNews($newsId) 
    {
        $db           = $this->dbConnect();
		$req          = $db->prepare('SELECT id_news, news_title, news_content, news.author, members.pseudo, news_image, id_category, DATE_FORMAT(publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS news_date_fr FROM news inner join members on members.id = news.author WHERE id_news = ?');
		$req          ->execute(array($newsId));
		$newsFeed     = $req->fetch();

		return $newsFeed;
    }

    /**
     * Fonction pour effectuer une màj de l'article
     *
     * @param [string] $title
     * @param [string] $content
     * @param [int] $id_news
     * @return string|int 
     */
    public function updateNewsFeed($title, $content, $id_news )
    {
        $db                = $this->dbConnect();
        $updateFeedNews    = $db->prepare('UPDATE news SET news_title = ?, news_content = ?, author = ?, news_image = ?, id_category = ?,  publication_date = NOW() WHERE id_news = ?');
        $updatedNewsFeed   = $updateFeedNews->execute(array($title, $content, $id_news));

        return $updatedNewsFeed;
    }

    /**
     * Fonction permettant la création d'un nouvel article
     *
     * @param [string] $title
     * @param [string] $content
     * @return string
     */
    public function createNewsFeed($title, $content) 
    {
        $db                 = $this->dbConnect();
        $createNewsFeed     = $db->prepare('INSERT INTO news (news_title, news_content, publication_date) VALUES ( ?, ?, NOW())');
        $createdNewsFeed    = $createNewsFeed->execute(array($title, $content));

        return $createdNewsFeed ;
    }

    /**
     * Fonction supprimant un article et son ID
     *
     * @param [int] $newsId
     * @return int
     */
    public function deleteNews($newsId)
    {
        $db             = $this->dbConnect();
        $req            = $db->prepare('DELETE FROM news WHERE id_news = ?');
        $deletedNews    = $req->execute(array($newsId));

        return $deletedNews;
    }

    /**
     * Fonction d'affichage de l'article
     *
     * @return string|int
     */
    public function displayNewsFeed()
    {
        $db                  = $this->dbConnect();
        $req                 = $db->prepare('SELECT news.id_news, news.news_title, news.news_content, news.author, news.news_image, news.id_category, DATE_FORMAT(news.publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS news_date_fr, categories.category_content FROM news INNER JOIN categories ON news.id_category = categories.id ORDER BY news.id_category ASC');
        $req                 ->execute(array());
        $displayNewsFeed     = $req->fetch();
        
        return $displayNewsFeed;    
    }
    
    /**
     * Fonction permettant l'obtention de la sous-catégorie par son ID
     *
     * @return int|string
     */
    public function getSubCategories()
    {
        $db                  = $this->dbConnect();
        $subCategories       = $db->prepare('SELECT * FROM f_subCategories WHERE id_category = ? ORDER BY name');
        // $subCategories       = $db->prepare('SELECT id FROM f_subCategories WHERE name = ?');
        return $subCategories;
    }

    /**
     * Fonction permettant l'obtention de la catégorie
     *
     * @return int|string
     */
    public function getCategories()
    {
        $db                  = $this->dbConnect();
        $categories          = $db->query ('SELECT * FROM f_categories ORDER BY name');

        return $categories;
    }

    /**
     * Fonction permettant l'obtention du topic avec les ID's de la catégorie et sous-catégorie
     *
     * @param [int] $id_categorie
     * @param [int] $id_subcategorie
     * @return int
     */
    public function getTopic($id_categorie, $id_subcategorie)
    {
        $db                  = $this->dbConnect();        
        $topics              = $db->prepare('SELECT * FROM f_topics 
            LEFT JOIN f_topics_category ON f_topics.id = f_topics_category.id_topic 
            LEFT JOIN f_categories ON f_topics_category.id_category = f_categories.id 
            LEFT JOIN f_subcategories ON f_topics_category.id_subcategory = f_subcategories.id 
            LEFT JOIN members ON f_topics.id_creator = members.id
            WHERE f_categories.id = ?');
        $topics  ->execute(array($id_categorie, $id_subcategorie));



         // $topics              = $db->prepare("SELECT id, id_forum, title, content, DATE_FORMAT(creation_date,'Le %d/%m/%Y à %H\h%i') as date_c, id_user FROM f_topics WHERE id = ?");
        // $topics               ->execute(array());
        // $topics              = $db->query("SELECT *,DATE_FORMAT(creation_date, 'Le %d/%m/%Y à %H\h%i') as date_c FROM f_topics ORDER BY id DESC");
        // $topics              = $topics->fetch();
        // $topics = $db->prepare($req);
        // $topics     = $topics->fetch();

        return $topics;
    }

    /**
     * Fonction pour créer un nouveau topic
     *
     * @param [string] $sujet
     * @param [string] $contenu
     * @param [int] $notif_mail
     * @return string|int
     */
    public function getANewTopic($sujet,$contenu,$notif_mail)
    {
        $db                  = $this->dbConnect();
        $newTopic            = $db->prepare('INSERT INTO f_topics (id_creator, title, content, creator_notif, creation_date) VALUES(?,?,?,?,NOW())');
        $newTopic            ->execute(array($_SESSION['id'],$sujet,$contenu,$notif_mail));

        return $newTopic;
    }

}