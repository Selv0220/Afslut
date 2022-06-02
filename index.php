<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Botanica</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/Bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/0a3ztzprally0eprqc4f0p37jzfzfl9xv6koxshqie43g1k6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
<div class="container-fluid hero" style="font-family: 'Playfair Display'">
    <div class="row">
        <a class="col-2">
            <button type="button" class="button">
                <span class="button__text" href="#">Klik her</span>
            </button>
        </a>
        <a class="col-3 px-3">
            <img src="images/Varer.jpg" class="img-fluid">
        </a>
    </div>
</div>


<?php include "includes/navigation.html"; ?>

<h5 class="section-header" style="font-family: 'Playfair Display'; color: black">Vores produkter</h5>

<div class="container-md" style="font-family: 'Playfair Display'">
    <div class="row">
        <div class="col-sm text-white">Buketter</div>
        <div class="col-sm text-white">Bryllup</div>
        <div class="col-sm text-white">Begravelse</div>
    </div>
    <div class="row">
        <div class="col-sm text-white">Anledning</div>
        <div class="col-sm text-white">Tilbehør</div>
        <div class="col-sm text-white">Om os</div>
    </div>
</div>

<div class="box text-center py-3" style="background-color:#F7F4F1; font-family: 'Playfair Display'; color: black"
    <div class="box-body">
        <h5 class="card-title">Besøg os fordi...</h5>
        <p class="fas fa-check-square"> ...</p> <br>
        <p class="fas fa-check-square"> ...</p> <br>
        <p class="fas fa-check-square"> ...</p> <br>
        <p class="fas fa-check-square"> ...</p> <br>
    </div>
</div>

<?php include "includes/footer.html"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

<!-- tinyMCE edittor

<form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
</form>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
-->
</body>
</html>
