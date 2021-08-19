<?php

class dataBase {

    //L'attribut $db sera disponible dans ses enfants
    protected $db;

    /*
     * Méthode magique qui permet e ce connecter à la base de données
     * @return type
     */

    public function __construct() {
        try {
            $this->db = new PDO('innoDB:host=eu-cdbr-west-01.cleardb.com;dbname=`heroku_ef333d26a4fcbf4`;charset=utf8', 'b4989a81bc327b', '09addbf9');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {

    }

}

?>