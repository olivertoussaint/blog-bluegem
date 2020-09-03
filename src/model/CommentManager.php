<?php

namespace Projet\model;

require 'vendor/autoload.php';

use Projet\model\Manager;

class CommentManager extends Manager
{
    /**
     * Fonction permettant d'obtenir les commentaires par l'ID
     *
     * @param [int] $newsId
     * @return int
     */
    public function getComments($newsId)
    {
        
        $db    = $this->dbConnect();
        $req   = $db->prepare('SELECT comments.id_comment, members.pseudo, members.avatar, comments.comment, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments inner join members on members.id = comments.id_member WHERE comments.id_news = ? ORDER BY comment_date');
        $req   ->execute(array($newsId));

        return $req;
    }

    /**
     * Fonction permettant d'obtenir les commentaires d'un topic
     *
     * @return string|int
     */
    public function getTopicComments()
    {
        $db    = $this->dbConnect();
        $req   = $db->prepare('SELECT topic_comment.id,topic_comment.id_topic,topic_comment.id_user,topic_comment.content,topic_comment.t_date, members.pseudo  FROM topic_comment INNER JOIN members ON topic_comment.id_user = members.id WHERE id_topic = ? ORDER BY topic_comment.t_date DESC');
        // $req   ->execute(array());
        // $topic_comment     = $req->fetchAll();
        
        return $req;
    }

    /**
     * Fonction validation du commentaire avec l'ID
     *
     * @param [int] $newsId
     * @return int
     */
    public function validatecomment($newsId)
    {
        $db                = $this->dbconnect();
        $req               = $db->prepare('UPDATE comments SET flagged = 0 WHERE id_comment = ?');
        $validatedcomment  = $req->execute(array($newsId));

        return $validatedcomment;
    }
    
    /**
     * Fonction commentaire de l'article par les ID's article, membre, et commentaire
     *
     * @param [int] $newsId
     * @param [int] $memberId
     * @param [string] $comment
     * @return int|string
     */
    public function newsComment($newsId, $memberId, $comment)
    {
        $db               = $this->dbConnect();
        $comments         = $db->prepare('INSERT INTO comments(id_member, id_news, comment, flagged, comment_date) VALUES(?, ?, ?, 0, NOW())');
        $displayComments  = $comments->execute(array(
            $memberId,
            $newsId, 
            $comment
        ));
        
        return $displayComments;       
    }

    /**
     * Fonction suppression du commentaire et de l'ID
     *
     * @param [int] $commentId
     * @return void
     */
     public function deleteComment($commentId) 
     {
        $db              = $this->dbConnect();
        $req             = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
        $deletedComment  = $req->execute(array($commentId));

        return $deletedComment;
     } 

     /**
      * Fonction suppression du commentaire de l'article et de son ID
      *
      * @param [int] $newsId
      * @return void
      */
     public function deleteCommentNews($newsId)
     {
        $db                  = $this->dbConnect();
        $req                 = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
        $deletedCommentNews  = $req->execute(array( $newsId ));

        return $deletedCommentNews;
     }  

     /**
      * Fonction signalement d'un article
      * definie à 0 par défaut
      * @param [int] $newsId
      * @return int
      */
    public function reporting($newsId)
    {
        $db               = $this->dbconnect();
        $req              = $db->prepare('UPDATE comments SET flagged = 1 WHERE id_comment = ?');
        $reportedComment  = $req->execute(array( $newsId ));

        return $reportedComment;
    }

    /**
     * Fonction permettant d'afficher tous les signalements
     * Réservé à l'admin 
     * @return int|string
     */
    public function getReporting()
    {
      $db             = $this->dbConnect();  
      $reportComment  = $db->prepare('SELECT * FROM comments WHERE flagged > 0');
      $reportComment  ->execute();

      return $reportComment; 

    }

    /**
     * Fonction comptage du nombre de commentaires
     *
     * @param [int] $newsId
     * @return int
     */
    public function countNumberComments($newsId)
    {
        $db            = $this->dbConnect();
        $nbrComments   = $db->prepare('SELECT COUNT(*) AS numberOfComments FROM comments WHERE id_news = ?');
        $nbrComments   ->execute(array( $newsId ));
        
        return $nbrComments;        
    } 
} 