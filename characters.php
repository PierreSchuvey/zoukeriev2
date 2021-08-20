<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/games.php';
include_once 'controllers/gamesListController.php';
?>
<div class="title">
    <h1><?= $_SESSION['pseudo'] ?></h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <center><h2 style="color:white">Sélectionne le jeu</h2></center>
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
