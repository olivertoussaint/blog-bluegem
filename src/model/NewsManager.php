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

    public function displayNewsFeed()
    {
        $db                  = $this->dbConnect();
        $req                 = $db->prepare('SELECT news.id_news, news.news_title, news.news_content, news.author, news.news_image, news.id_category, DATE_FORMAT(news.publication_date, \'%d/%m/%Y à %Hh%imin%ss\') AS news_date_fr, categories.category_content FROM news INNER JOIN categories ON news.id_category = categories.id ORDER BY news.id_category ASC');
        $req                 ->execute(array());
        $displayNewsFeed     = $req->fetch();
        
        return $displayNewsFeed;    
    }
    

    public function getSubCategories()
    {
        $db                  = $this->dbConnect();
        $subCategories       = $db->prepare('SELECT * FROM f_subCategories WHERE id_category = ? ORDER BY name');
        // $subCategories       ->execute(array());

        return $subCategories;
    }

    public function getCategories()
    {
        $db                  = $this->dbConnect();
        $categories          = $db->query ('SELECT * FROM f_categories ORDER BY name');

        return $categories;
    }

    public function getSubjects($id)
    {
        $db                  = $this->dbConnect();
        $subjects            = $db->prepare("SELECT *,DATE_FORMAT(creation_date, 'Le %d/%m/%Y à %H\h%i') as date_c FROM f_topics WHERE id_forum = ? ORDER BY creation_date DESC");
        $subjects            ->execute(array($id));
        
        return $subjects;
    }

    public function getTopic()
    {
        
        $db                  = $this->dbConnect();
        // $topics              = $db->prepare("SELECT id, id_forum, title, content, DATE_FORMAT(creation_date,'Le %d/%m/%Y à %H\h%i') as date_c, id_user FROM f_topics WHERE id = ?");
        // $topics               ->execute(array());
        $topics              = $db->query("SELECT *,DATE_FORMAT(creation_date, 'Le %d/%m/%Y à %H\h%i') as date_c FROM f_topics ORDER BY id DESC");
        // $topics              = $topics->fetch();
        // $req = "SELECT * FROM f_topics LEFT JOIN f_topics_category ON f_topics.id = f_topics_category.id_topic LEFT JOIN f_categories ON f_topics_category.id_category = f_categories.id LEFT JOIN f_subcategories ON f_topics_category.id_subcategory = f_subcategories.id WHERE f_categories.id = ?";
        // $topics = $db->prepare($req);

        return $topics;
    }

    public function getANewTopic($sujet,$contenu,$notif_mail)
    {
        try{
        $db                  = $this->dbConnect();
        $newTopic            = $db->prepare('INSERT INTO f_topics (id_creator, title, content, creator_notif, creation_date) VALUES(?,?,?,?,NOW())');
        $newTopic            ->execute(array($_SESSION['id'],$sujet,$contenu,$notif_mail));
        }
        catch (\Exception $e) 
{
    die('Erreur : '.$e->getMessage());
    
}
        return $newTopic;
    }

}