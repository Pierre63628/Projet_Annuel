<?php include "header.php"; ?>
<?php session_start(); ?>

<?php require "../core/functions.php" ?>

<img class="img-fluid" src="../Image/logo1.png" alt="">

<div class="row d-flex justify-content-center">
    <div class="col-md-5">
        <div class="row">
            <div class=title>
                <h1 class="m-4 text-center">S'inscrire</h1>

                <div class="centerForm2">

                    <form action="core/registerUser.php" method="POST">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="birthday" class="form-label">
                                            Votre date de naissance :
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="date" id="birthday" name="birthday" placeholder="Votre date de naissance" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <label for="birthday" class="form-label">
                                Email :
                            </label>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Votre email" required="required">

                            </div>
                        </div>


                        <div class="col-md-12">
                            <label for="birthday" class="form-label">
                                Mot de passe :
                            </label>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="pwd" placeholder="Votre mot de passe" required="required">
                            </div>

                            <div class="col-md-12">
                                <label for="birthday" class="form-label">
                                    Confirmation :
                                </label>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="password" name="pwdConfirm" placeholder="Confirmation" required="required">
                            </div>

                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">

                                <input class="form-check-input" type="checkbox" id="cgu" name="cgu" required="required">
                                <label class="form-label" for="cgu">
                                    J'accepte les CGU
                                </label>
                            </div>

                            <div class="col-md-12">
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

                        <div class="col-md-12">
                            <nav aria-label="Breadcrumb" class="breadcrumb">
                                <ul>
                                    <li><a href="register.php">Étape 1</a></li>
                                    <li><span aria-current="page">Étape2</span></li>
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