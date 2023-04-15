<?php include("header.php") ?>

<img class="img-fluid" src="./Image/logo1.png" alt="logo">

<div class="d-flex justify-content-center">
    <div class="createaccount">
        <form>

            <div class="row">

                    <div class="row justify-content-center">
                        <img src="./Image/Visage2.png" alt="Photo de profile" class="pp">
                    </div>

                <div class="row mb-3 center-text">
                    <label for="profilepicture">Télécharger une photo:</label>
                </div>

                <div class="row mb-2">
                    <div>
                        <input type="image" name="porfilepicture" id="porfilepicture">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Ajoutez une description" id="description" style="height: 100px"></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php") ?>