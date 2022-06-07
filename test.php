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
<style>
</style>
<body>


<div class="m-0 p-0 d-flex flex-row-reverse">
<img src="images/dum_plante.png" class="bagved m-0" style="position: fixed">
</div>


    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-6">
                <img src="images/BLogo.png" class="img-fluid ">
            </div>
    </div>
    </div>
<br>
<div class="container-sm my-5">
<div class="card col-4">
    <div class="card-body bodybg1 px-0 pb-5">
        <h5 class="card-title text-center">Buketter</h5>
        <img src="images/facebook.png" class="card-img-top p-2" style="background: white">
    </div>
</div>
</div>

<div class="container-sm my-5">
<div class="card col-4">
    <div class="card-body bodybg2 px-0 pb-5">
        <h5 class="card-title text-center">Bryllup</h5>
        <img src="images/facebook.png" class="card-img-top p-2" style="background: white">
    </div>
</div>
</div>

<div class="container-sm my-5">
<div class="card col-4">
    <div class="card-body bodybg3 px-0 pb-5">
        <h5 class="card-title text-center">Begravelse</h5>
        <img src="images/facebook.png" class="card-img-top p-2" style="background: white">
    </div>
</div>
</div>

<div class="container-sm my-5">
<div class="card col-4">
    <div class="card-body bodybg1 px-0 pb-5">
        <h5 class="card-title text-center">Anledning</h5>
        <img src="images/facebook.png" class="card-img-top p-2" style="background: white">
    </div>
</div>
</div>

<div class="container-sm my-5">
<div class="card col-4">
    <div class="card-body bodybg2 px-0 pb-5">
        <h5 class="card-title text-center">Tilbehør</h5>
        <img src="images/facebook.png" class="card-img-top p-2" style="background: white">
    </div>
</div>
</div>

<div class="container-sm my-5">
<div class="card col-4">
    <div class="card-body bodybg3 px-0 pb-5">
        <h5 class="card-title text-center">Om os</h5>
        <img src="images/facebook.png" class="card-img-top p-2" style="background: white">
    </div>
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

<!-- Gør header større under scroll
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
-->

</body>
</html>
