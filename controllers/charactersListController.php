<?php
    $charactersList = new characters();
    $charactersList->idUser = $_SESSION['id'];
    $charactersList->idGame = $_GET['gameId'];
    $charactersList = $charactersList->getCharacters();
?>