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
      <?php
      var_dump($gamesList);
          foreach ($gamesList as $g){
      ?>
              <tr>
                  <td><?= $g->Name; ?></td>
              </tr>
      <?php
          }
      ?>

    </div>
  </body>
  <footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
  </footer>
</html>
