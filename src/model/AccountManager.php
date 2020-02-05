<?php

namespace Projet\Model;

class AccountManager extends Manager {

	function controlRegister($pseudo,$email) 
	{
        $db = $this->dbConnect();
        $isDuplicate = $db->prepare('SELECT pseudo, email FROM memebers WHERE pseudo =? OR email =?');
        $isDuplicate -> execute(array($pseudo, $email));
            
        return $isDuplicate;
    }

	public function loginMember($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pseudo, password, role FROM members WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $logMember = $req->fetch();

        return $logMember;
    }

    public function checkPseudoMember($pseudo)
    {
        $db  = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM members WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $pseudoChecked = $req->fetch();

        return $pseudoChecked;
    }

	function createMember($pseudo,$email,$password) 
	{
        $db = $this->dbConnect();
        // Account Insert 
        $newMember = $db->prepare('INSERT INTO members (pseudo, email, avatar, password, role) VALUES (?, ?, ?, ?, 0)');
            $newMember -> execute(array($pseudo, $email, "defaultUser.jpg", $password));
            
        return $newMember;           
    }
}