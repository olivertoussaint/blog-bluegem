<?php

namespace Projet\model;

require 'vendor/autoload.php';

use Projet\model\Manager;

class CommentManager extends Manager
{
    public function getComments($newsId)
    {
        
        $db    = $this->dbConnect();
        $req   = $db->prepare('SELECT comments.id_comment, members.pseudo, comments.comment, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments inner join members on members.id = comments.id_member WHERE comments.id_news = ? ORDER BY comment_date');
        $req->execute(array(
            $newsId
        ));

        return $req;
    }
    
    public function newsComment($newsId, $memberId, $comment)
    {
        $db              = $this->dbConnect();
        $comments        = $db->prepare('INSERT INTO comments(id_member, id_news, comment, flagged, comment_date) VALUES(?, ?, ?, 0, NOW())');
        $displayComments = $comments->execute(array(
            $memberId,
            $newsId, 
            $comment
        ));
        
        return $displayComments;       
    }

     public function deleteComment($commentId) 
     {
        $db             = $this->dbConnect();
        $req            = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
        $deletedComment = $req->execute(array(
            $commentId
        ));

        return $deletedComment;
     } 

     public function deleteCommentNews($newsId)
     {
        $db                 = $this->dbConnect();
        $req                = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
        $deletedCommentNews = $req->execute(array(
            $newsId
        ));

        return $deletedCommentNews;
     }  

    public function reporting($newsId)
    {
        $db              = $this->dbconnect();
        $req             = $db->prepare('UPDATE comments SET flagged = 1 WHERE id_comment = ?');
        $reportedComment = $req->execute(array(
            $newsId
        ));

        return $reportedComment;
    }

    public function validatecomment($newsId)
    {
        $db               = $this->dbconnect();
        $req              = $db->prepare('UPDATE comments SET flagged = 0 WHERE id_comment = ?');
        $validatedcomment = $req->execute(array(
            $newsId
        ));

        return $validatedcomment;
    }

    public function getReporting()
    {
      $db            = $this->dbConnect();  
      $reportComment = $db->prepare('SELECT * FROM comments WHERE flagged > 0');
      $reportComment->execute();

      return $reportComment; 

    }

    public function countNumberComments($newsId)
    {
        $db            = $this->dbConnect();
        $nbrComments = $db->prepare('SELECT COUNT(*) AS numberOfComments FROM comments WHERE id_news = ?');
        $nbrComments->execute(array(
            $newsId
        ));
        
        return $nbrComments;        
    } 
} 