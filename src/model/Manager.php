<?php

namespace Projet\Model;

class Manager {
        protected function dbConnect(){
            // Connexion à la base de données
            $db = new \PDO('mysql:host=localhost;dbname=blue_gem;charset=utf8', 'root', '');
    
            return $db;
            
        }
    }
    