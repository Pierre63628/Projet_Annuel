<?php include("header.php") ?>

<img class="img-fluid" src="../Image/logo1.png" alt="logo">

<div class="d-flex justify-content-center">
    <div class="createaccount">
        <form>

            <div class="row">

                <div class="row justify-content-center">
                    <img src="../Image/Visage2.png" alt="Photo de profile" class="pp">
                </div>

                <div class="row mb-3">
                    <label for="profilepicture" class="text-center">Ajouter une photo de porfil</label>
                </div>

                <div class="row mb-2">
                    <div>
                        <input type="image" name="porfilepicture" id="porfilepicture" class="center-center">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Ajoutez une description" id="description" style="height: 100px"></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success justify-content-center">Valider</button>

                </div>
            </div>
        </form>
        <nav aria-label="Breadcrumb" class="breadcrumb">

            <ul>
                <li><a href="register.php">Étape 1</a></li>
                <li><a href="register2.php">Étape 2</a></li>
                <li><span aria-current="page">Étape 3</span></li>
            </ul>
        </nav>
    </div>
</div>
<?php include("footer.php") ?>