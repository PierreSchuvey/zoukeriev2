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
            $dbstr = getenv('CLEARDB_DATABASE_URL');

            $dbstr = substr("$dbstr", 8);
            $dbstrarruser = explode(":", $dbstr);

//Please don't look at these names. Yes I know that this is a little bit trash :D
            $dbstrarrhost = explode("@", $dbstrarruser[0]);
            $dbstrarrrecon = explode("?", $dbstrarrhost[0]);
            $dbstrarrport = explode("/", $dbstrarrrecon[0]);

            $dbpassword = $dbstrarrhost[0];
            $dbhost = $dbstrarrport[0];
            $dbport = $dbstrarrport[0];
            $dbuser = $dbstrarruser[0];
            $dbname = $dbstrarrport[0];

            unset($dbstrarrrecon);
            unset($dbstrarrport);
            unset($dbstrarruser);
            unset($dbstrarrhost);

            unset($dbstr);
            /*  //Uncomment this for debug reasons
            echo $dbname . " - name<br>";
            echo $dbhost . " - host<br>";
            echo $dbport . " - port<br>";
            echo $dbuser . " - user<br>";
            echo $dbpassword . " - passwd<br>";
            */
            $dbanfang = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
            $this->db = new PDO($dbanfang, $dbuser, $dbpassword);;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {

    }

}

?>