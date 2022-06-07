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
    <link href="css/Bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/0a3ztzprally0eprqc4f0p37jzfzfl9xv6koxshqie43g1k6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>


<?php include "includes/navigation.html"; ?>


<div class="container-fluid hero" style="font-family: 'Playfair Display'" id="bg">
    <div class="row">
        <div class="col-6 text-center my-auto">
            <button type="button" class="button">
                <a class="button__text text-decoration-none" href="#Hertil">Klik her</a>
            </button>
        </div>
        <div class="col-6 m-0 p-0 toppen">
            <img src="images/hero_varer.jpg" class="img-fluid float-end vh-100">
        </div>
    </div>
</div>




<div class="py-5" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Vores produkter</h5></div>

<div class="container-fluid valgF" style="font-family: 'Playfair Display'">
    <div class="row mx-auto">
        <div class="col-sm text-white">Buketter</div>
        <div class="col-sm text-white">Bryllup</div>
        <div class="col-sm text-white">Begravelse</div>
    </div>
    <div class="row mx-auto">
        <div class="col-sm text-white">Anledning</div>
        <div class="col-sm text-white">Tilbehør</div>
        <div class="col-sm text-white">Om os</div>
    </div>
</div>

<div class="box text-center py-3" style="background-color:white; font-family: 'Playfair Display'; color: black"
<div class="box-body">
    <h5 class="card-title">Besøg os fordi...</h5>
    <ul><img src="images/blad_logo.png" width="22"> Vi har blomster</ul>
    <ul><img src="images/blad_logo.png" width="22"> Vi har mange blomster</ul>
    <ul><img src="images/blad_logo.png" width="22"> Vi har rigtig mange blomster</ul>
    <ul><img src="images/blad_logo.png" width="22"> Vi har ikke nogle blomster</ul>
</div>
</div>

<?php include "includes/footer.html"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- gør hero usynlig
<script>
    var heroBg = document.getElementById('bg')
    window.addEventListener('scroll', function (){
        heroBg.style.opacity = 1 - +window.pageYOffset/600+''
        heroBg.style.top = +window.pageYOffset+'px'
        heroBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })

</script>
-->


<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
            document.getElementById("header").style.width = "250px";
        } else {
            document.getElementById("header").style.width = "150px";
        }
    }

</script>


</body>
</html>
