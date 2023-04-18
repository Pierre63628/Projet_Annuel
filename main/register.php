<?php session_start(); ?>

<?php require "../core/functions.php" ?>

<?php include "header.php" ?>


<img class="img-fluid" src="../Image/logo1.png" alt="">

<div class="row d-flex justify-content-center">
    <div class="col-md-5">
        <div class="row">
            <div class=title>
                <h1 class="m-4 text-center">S'inscrire</h1>

                <div class="centerForm">

                    <form action="core/registerUser.php" method="POST">
                        <div class="row mb-12">

                            <div class="col-md-12 justify-content-center">
                                <label for="gender0" class="form-label">
                                    M.
                                </label>
                                <input class="form-check-input" type="radio" id="gender0" name="gender" checked="checked" value="0">

                                <label for="gender1" class="form-label">
                                    Mme.
                                </label>
                                <input class="form-check-input" type="radio" id="gender1" name="gender" value="1">

                                <label for="gender2" class="form-label">
                                    Autre
                                </label>
                                <input class="form-check-input" id="gender2" type="radio" name="gender" value="2">
                            </div>

                            <div class="col-md-12 row mb-4">
                                <label for="lastname">
                                    Entrez votre nom :
                                </label>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Votre nom" required="required">
                            </div>

                            <div class="col-md-12 row mb-4">
                                <label for="firstname">
                                    Entrez votre prénom :
                                </label>
                                <input class="form-control" class="form-control" type="text" name="firstname" id="firstname" placeholder="Votre prénom" required="required">
                            </div>

                            <div class="col-md-12 row mb-4">
                                <label for="username">Nom de d'utilisateur :</label>
                                <input class="form-control" class="form-control" type="text" name="username" id="username" placeholder="Nom de d'utilisateur" required="required">
                            </div>
                        </div>

                        <div class="row mb-8">
                            <div class="col-md-12 text-center">
                                <label class="row mb-2">
                                    <button class="btn btn-primary mb-4">Suivant</button>
                                </label>
                            </div>
                        </div>

                        <div class="row mb-8">
                            <div class="col-md-12 text-cente">
                                <label class="row mb-2">
                                    <a href="login.php">Vous avez déjà un compte ?</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <nav aria-label="Breadcrumb" class="breadcrumb">
                                <ul>
                                    <li><span aria-current="page">Étape 1</span></li>
                                    <li><a href="register2.php">Étape 2</a></li>
                                    <li><a href="register3.php">Étape 3</a></li>
                                </ul>
                            </nav>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>