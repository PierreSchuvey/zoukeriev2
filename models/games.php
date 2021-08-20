<?php

class games extends dataBase {

    public $id = 0;
    public $name = '';

    public function __construct() {
        parent::__construct();
    }

    /*
     * Méthode permettant de sélectionner toute les versions
     */

    public function getAllNames() {
        $query = 'SELECT id, name FROM games';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $allVersion = $responseRequest->fetchAll(PDO::FETCH_OBJ);
        }
        return $allVersion;
    }

    public function __destruct() {

    }

}

?>