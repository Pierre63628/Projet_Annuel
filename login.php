<?php session_start(); ?>

<?php require "core/functions.php" ?>

<?php include "header.php" ?>


<img class="img-fluid" src="./Image/logo1.png" alt="logo">


<div class="d-flex justify-content-center">
    <div class=title>
        <h1 class="m-4 text-center">Se connecter</h1>
        <div class="centerlog">
            <form action="core/login.php" method="POST">

                <div class="row mb-3">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="username" class="form-label">Username:

                            </label>
                            <input class="form-control" type="username" name="Username" placeholder="Username" required="required">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="email" class="form-label">Password:

                            </label>
                            <input class="form-control" type="password" name="pwd" placeholder="Mot de passe" required="required">
                        </div>
                    </div>

                    <div class="paddingbutton">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="row mb-2">
                                    <button class="btn btn-primary mb-4 color-99CC5B">Se connecter</button>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-12">
                        <div class="col-md-12 text-center">
                            <label class="row mb-4">
                                <a href="register.php">Pas de compte ?</a>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php" ?>