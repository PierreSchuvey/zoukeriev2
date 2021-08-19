<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/loginUsers.php';
?>
    <div class="container bodyPage" id="loginContainer">
        <div class="title">
            <h1>la zoukerie</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <form id="loginForm" action="" method="post">
                    <div class="form-group col-6 topLog">
                        <label for="exampleInputEmail1">Pseudo</label><br>
                        <input type="text" class="form-control" name="pseudoLog">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleInputEmail1">Mot de passe</label><br>
                        <input type="password" class="form-control" name="passwordLog">
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="form-control" name="logInSubmit"> Connexion</button>
                        <p class="errorsLoginSub"><?= isset($formError['passwordLog']) ? $formError['passwordLog'] : '' ?><?= isset($formError['pseudoLog']) ? $formError['pseudoLog'] : '' ?></p>
                        <small>Vous n'êtes pas encore inscrit ? Alors cliquer : <a href = "subscribeForm.php" alt = "Inscription" id = "subscribe">Ici</a></small>
                    </div>
                </form>
            </div>
        </div>
        <div class = "row">
            <div class = "col-lg-12">
            </div>
        </div>
    </div>