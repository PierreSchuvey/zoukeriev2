<!DOCTYPE html>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Les JdR de la Zoukerie</title>
  </head>
  <body>
    <div class="title">
      <img id="imgLeft" src="assets/images/zoukerieLogo.jpg" alt="Zoukerie Logo">
        <h1>la zoukerie fait des JdR</h1>
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
