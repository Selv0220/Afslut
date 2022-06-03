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

    <link rel="icon" href="images/blad_logo.png">

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
                <a class="button__text text-decoration-none flyv" href="#Hertil" id="dynamic">Klik her</a>
            </button>
        </div>
        <div class="col-6 m-0 p-0 toppen">
            <img src="images/annie-splash.png" class="img-fluid float-end vh-100">
        </div>
    </div>
</div>

<div class="container-fluid valgF py-5" style="font-family: 'Playfair Display'">
    <h5 class="section-header py-5 my-5" style="font-family: 'Playfair Display'; color: black">Vores produkter</h5>
    <div class="row mx-auto">
        <button class="col-sm text-white my-3 kat">Buketter</button>
        <button class="col-sm text-white my-3 kat">Bryllup</button>
        <button class="col-sm text-white my-3 kat">Begravelse</button>
    </div>
    <div class="row mx-auto">
        <button class="col-sm text-white my-3 kat">Anledning</button>
        <button class="col-sm text-white my-3 kat">Tilbehør</button>
        <button class="col-sm text-white my-3 kat">Om os</button>
    </div>
</div>

<div class="box text-center py-3" style="background-color:white; font-family: 'Playfair Display'; color: black">
    <h5 class="section-header py-4" style="font-family: 'Playfair Display'; color: black">Besøg os fordi...</h5>
    <div class="box-body pb-2">
        <ul><img src="images/blad_logo.png" width="22"> Vi har blomster</ul>
        <ul><img src="images/blad_logo.png" width="22"> Vi har mange blomster</ul>
        <ul><img src="images/blad_logo.png" width="22"> Vi har rigtig mange blomster</ul>
        <ul><img src="images/blad_logo.png" width="22"> Vi har ikke nogle blomster</ul>
    </div>
</div>

<div class="valgF py-5">
    <h5 class="section-header py-2" style="font-family: 'Playfair Display'; color: black">Se her!</h5>
    <div id="carouselExampleDark" class="carousel slide carousel-dark carousel-fade col-lg-4 mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="images/annie-splash.png" class="d-block w-75 mx-auto" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/hero_varer.jpg" class="d-block w-75 mx-auto" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php include "includes/footer.html"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 150) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    });
</script>

<script>
    var heroBg = document.getElementById('bg')
    window.addEventListener('scroll', function (){
        heroBg.style.opacity = 1 - +window.pageYOffset/650+''
        heroBg.style.top = +window.pageYOffset+'px'
        heroBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })
</script>

</body>
</html>