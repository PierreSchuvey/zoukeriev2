<?php
include_once 'vues/header.php';
// Inégration du modéle dataBase pour éfféctué la connexion à la bas de données
include_once 'models/dataBase.php';
// intégration du modéle user
include_once 'models/users.php';
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
      <div class="row">
        <div class="col-12 input-position text-center">
          <div  id="resultat">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 input-position text-center">
          <div id="total"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-6 input-position text-center">
          <div id="nbSix"></div>
        </div>
        <div class="col-6 input-position text-center">
          <div id="nbOne"></div>
        </div>
      </div>
    </div>
    <div class="rollDices">
        <div class="row">
          <div class="form-group col-12">
            <label for="nbDices">Nombre de dés</label>
            <input id="nbDices" type="text" class="form-control" name="nbDices" placeholder="Nombre de dés">
          </div>
        </div>
        <button id="rolling" type="button" name="button">Lancer</button>
    </div>
  </body>
  <footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
  </footer>
</html>
