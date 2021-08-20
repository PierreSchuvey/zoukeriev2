
<?php

class characters extends dataBase {

    public $id = 0;
    public $name = '';
    public $idUser = 1;
    public $idGame = 1;


    public function __construct() {
        parent::__construct();
    }



    public function getCharacters() {
        $query = 'SELECT `id`,`name` FROM `characters` WHERE `id_user` = :idUser AND `id_game` = :idGames';
        $getCharacters = $this->db->prepare($query);
        $getCharacters->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        $getCharacters->bindValue(':idGame', $this->idGame, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getCharacters->execute();
        return $getCharacters = $getCharacters->fetchAll(PDO::FETCH_OBJ);
    }

    public function __destruct() {

    }

}

?>