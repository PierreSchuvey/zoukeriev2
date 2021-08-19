<?php
include_once 'vues/header.php';
// Inégration du modéle dataBase pour éfféctué la connexion à la bas de données
include_once 'models/dataBase.php';
// intégration du modéle user
include_once 'models/users.php';
include_once 'models/games.php';
//Intégration du controlleur addUserController
include_once 'controllers/addUserController.php';
?>
  <body>
    <div class="title">
      <img id="imgLeft" src="assets/images/zoukerieLogo.jpg" alt="Zoukerie Logo">
        <h1><?= $_SESSION['pseudo'] ?></h1>
      <img id="imgRight" src="assets/images/zoukerieLogo.jpg" alt="Zoukerie Logo">
    </div>
    <div class="container">
      <?= $allVersion ?>
    </div>
  </body>
  <footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
  </footer>
</html>
