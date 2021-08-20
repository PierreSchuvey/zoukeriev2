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
          <?php

              foreach ($gamesList as $g){
          ?>
            <div class="col-12 offset-sm-2 col-sm-3">
                <a href="characters.php?gameId=<?= $g->id ?>"><?= $g->name ?></a>
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
