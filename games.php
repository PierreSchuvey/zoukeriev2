<?php
include_once 'vues/header.php';
// Inégration du modéle dataBase pour éfféctué la connexion à la bas de données
include_once 'models/dataBase.php';
// intégration du modéle user
include_once 'models/users.php';
include_once 'models/games.php';
//Intégration du controlleur addUserController
include_once 'controllers/gamesListController.php.php';
?>
  <body>
    <div class="title">
        <h1><?= $_SESSION['pseudo'] ?></h1>
    </div>
    <div class="container">
      <?php
        $gamesList
      ?>
    </div>
  </body>
  <footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
  </footer>
</html>
