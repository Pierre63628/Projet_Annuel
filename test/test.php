<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="test.css" rel="stylesheet">
    <script src="dragdrop.js"></script>
    <title>Projet Annuel</title>
</head>


<div id="drop-area">
  <form class="my-form">
    <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
    <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
    <label class="button" for="fileElem">Select some files</label>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<div class="copyright">
    <p>&copy; 2023 Ilhan Margotte Pierre-Emmanuel</p>
</div>

</html>
