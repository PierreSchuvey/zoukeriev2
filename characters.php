<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/characters.php';
include_once 'controllers/charactersListController.php';
?>
<div class="title">
    <h1><?= $_SESSION['pseudo'] ?></h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 style="color:white;text-align: center">Sélectionne ton personnage ou </h2>
            <a href="createCharacter.php?gameId=<?=$_GET['gameId']?>">Créer en un !</a>
        </div>
    </div>
    <div class="row">
        <?php
            foreach ($charactersList as $c){
            ?>
            <div class="col-12 offset-sm-2 col-sm-3">
                <a class="gamesLink" href="dice.php?characterId=<?= $c->id ?>"><?= $c->name ?></a>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>
<footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
</footer>
</html>
