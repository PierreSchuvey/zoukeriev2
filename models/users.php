<?php

class users extends dataBase {

    public $id = 0;
    public $pseudo = '';
    public $email = '';
    public $password = '';
    public $profilePicture = '';
    public $friendCode = '';
    public $bioUsers = '';

    public function __construct() {
        parent::__construct();
    }

    /*
     * Méthode permettant de récupérer les données d'inscription en fonction du pseudo renseigné
     */

    public function loginIn() {
        $userLog = $this->db->prepare('SELECT `id`,`pseudo`, `password` FROM `users` WHERE `pseudo` = :pseudo');
        $userLog->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $userLog->execute();
        return $userLog = $userLog->fetch(PDO::FETCH_OBJ);
    }



    /*
     * Méthode permettant de récupérer l'id du dérnier utilisateur et de l'incrémenté de 1
     */

    public function lastId() {
        $lastId = $this->db->prepare('SELECT MAX(`id`)+1 AS lastId FROM users');
        $lastId->execute();
        if (is_object($lastId)) {
            return $lastId = $lastId->fetch(PDO::FETCH_OBJ);
        }
    }

    /*
     * Méthode permettant de récupérer le mot de passe de l'utilisateur
     */

    public function usedPassword() {
        $usedPassword = $this->db->prepare('SELECT password FROM users WHERE id = :id');
        $usedPassword->bindValue(':id', $this->id, PDO::PARAM_STR);
        $usedPassword->execute();
        if (is_object($usedPassword)) {
            return $usedPassword = $usedPassword->fetch(PDO::FETCH_OBJ);
        }
    }

    /*
     * Méthode permettant d'ajouter un utilisateur à la base de données
     */

    public function addUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `users`(`pseudo`, `password`) VALUES(:pseudo, :password)';
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addUser->execute();
    }

    public function __destruct() {

    }

}

?>