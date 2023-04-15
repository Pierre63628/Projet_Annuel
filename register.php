<?php session_start(); ?>

<?php require "core/functions.php" ?>

<?php include "header.php" ?>


<img class="img-fluid" src="./Image/logo1.png" alt="">

<div class="row d-flex justify-content-center">
    <div class="col-md-8">
        <div class="row">
            <div class="col-12">
                <div class=title>
                    <h1 class="m-4 text-center">S'inscrire</h1>

                    <div class="centerForm">

                        <form action="core/registerUser.php" method="POST">
                            <div class="row mb-4">

                                <div class="col-md-3">
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

                                <div class="col-md-5">
                                    <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Votre nom" required="required">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" class="form-control" type="text" name="firstname" id="firstname" placeholder="Votre prénom" required="required">
                                </div>
                                <div class="col-md-4">
                                    <label for="username">Nom de d'utilisteur</label>
                                    <input class="form-control" class="form-control" type="text" name="username" id="username" placeholder="Nom de d'utilisteur" required="required">

                                </div>

                            </div>



                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="birthday" class="form-label">
                                                Votre date de naissance :
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" type="date" id="birthday" name="birthday" placeholder="Votre date de naissance" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="Votre email" required="required">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <input class="form-control" type="password" name="pwd" placeholder="Votre mot de passe" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" name="pwdConfirm" placeholder="Confirmation" required="required">
                                </div>

                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">

                                    <input class="form-check-input" type="checkbox" id="cgu" name="cgu" required="required">
                                    <label class="form-label" for="cgu">
                                        J'accepte les CGU
                                    </label>
                                </div>

                                <div class="col-md-6">
                                    <input class="form-check-input" type="checkbox" id="newletter" name="newletter">
                                    <label class="form-label" for="newletter">
                                        Inscription à la newsletter
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-8">
                                <div class="col-md-12 text-center">
                                    <label class="row mb-2">
                                        <button class="btn btn-primary mb-4">S'inscrire</button>
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-8">
                                <div class="col-md-12 text-center">
                                    <label class="row mb-2">
                                        <a href="login.php">Vous avez déjà un compte ?</a>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>