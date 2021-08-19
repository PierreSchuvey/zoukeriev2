<?php

class dataBase {

    //L'attribut $db sera disponible dans ses enfants
    $cleardb_url      = parse_url("mysql://b4989a81bc327b:09addbf9@eu-cdbr-west-01.cleardb.com/heroku_ef333d26a4fcbf4?reconnect=true");
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);
    protected $db;

    /*
     * Méthode magique qui permet e ce connecter à la base de données
     * @return type
     */

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=eu-cdbr-west-01.cleardb.com;dbname=`heroku_ef333d26a4fcbf4`;charset=utf8', 'b4989a81bc327b', '09addbf9');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {

    }

}

?>