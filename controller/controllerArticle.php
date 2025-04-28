<?php
require_once './Model/bdb.php';
class Model{
    static function article(){

        global $pdo;
            $articles = $pdo->query("SELECT * FROM articles");
            return $articles->fetchAll();
        }
        
    }

$articles = Model::article(); // méthode static





