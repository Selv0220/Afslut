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
    <link href="css/fail.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/0a3ztzprally0eprqc4f0p37jzfzfl9xv6koxshqie43g1k6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>


<div class="m-0 p-0 d-flex flex-row-reverse">
    <img src="images/dum_plante.png" class="bagved m-0" style="position: fixed">
</div>





<!-- Lille starter -->
<div class="tiny">
    <div class="container mt-5 pt-5 bg-transparent" id="logos">
        <br class="my-5"><br class="my-5">
        <br class="my-5"><br class="my-5">
        <br class="my-5"><br class="my-5">
        <div class="row">
            <div class="col-6 mx-5">
                <img src="images/BLogo.png" class="img-fluid ">
            </div>
        </div>
    </div>
    <!-- mellemrum -->
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">

    <div class="container-fluid bg-transparent" id="knaps">
        <div class="row">
            <div class="col-6 text-center my-auto mx-auto">
                <a href="#Ned">
                    <button class="mx-auto text-center bg-transparent border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>


    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">
    <br class="my-5"><br class="my-5">

    <div class="container-sm my-5 mx-5">
        <div class="card col-4">
            <div class="card-body bodybg1 px-0 pb-5">
                <h3 class="card-title text-center">Buketter</h3>
                <img src="images/IC_buket.jpg" class="card-img-top p-2" style="background: white">
            </div>
        </div>
    </div>
    <!-- mellemrum -->
    <br class="my-5"><br class="my-5">

    <div class="container-sm my-5 mx-5">
        <div class="card col-4">
            <div class="card-body bodybg2 px-0 pb-5">
                <h3 class="card-title text-center">Bryllup</h3>
                <img src="images/DF_bryl.jpg" class="card-img-top p-2" style="background: white">
            </div>
        </div>
    </div>
    <!-- mellemrum -->
    <br class="my-5"><br class="my-5">


    <div class="container-sm my-5 mx-5">
        <div class="card col-4">
            <div class="card-body bodybg3 px-0 pb-5">
                <h3 class="card-title text-center">Begravelse</h3>
                <img src="images/RL_grav.jpg" class="card-img-top p-2" style="background: white">
            </div>
        </div>
    </div>
    <!-- mellemrum -->
    <br class="my-5"><br class="my-5">

    <div class="container-sm my-5 mx-5">
        <div class="card col-4">
            <div class="card-body bodybg1 px-0 pb-5">
                <h3 class="card-title text-center">Anledning</h3>
                <img src="images/AS_valen.jpg" class="card-img-top p-2" style="background: white">
            </div>
        </div>
    </div>
    <!-- mellemrum -->
    <br class="my-5"><br class="my-5" id="Ned">

    <div class="container-sm my-5 mx-5">
        <div class="card col-4">
            <div class="card-body bodybg2 px-0 pb-5">
                <h3 class="card-title text-center">Tilbehør</h3>
                <img src="images/EK_choco.jpg" class="card-img-top p-2" style="background: white">
            </div>
        </div>
    </div>
    <!-- mellemrum -->
    <br class="my-5"><br class="my-5">

    <div class="container-sm my-5 mx-5">
        <div class="card col-4">
            <div class="card-body bodybg3 px-0 pb-5">
                <h3 class="card-title text-center">Om os</h3>
                <img src="images/Varer.jpg" class="card-img-top p-2" style="background: white">
            </div>
        </div>
    </div>

    <!-- mellemrum -->
    <br class="my-5"><br class="my-5">
</div>




<!-- Lille slutter -->




<!-- Stor starter -->




<div class="bg-white">
    <?php include "includes/navigation.html"; ?>

    <div class="container-fluid hero" style="font-family: 'Playfair Display'" id="bg">
        <div class="row">
            <div class="col-6 text-center my-auto">
                <button type="button" class="button">
                    <a class="button__text text-decoration-none flyv" href="#Hertil">Klik her</a>
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
            <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Vi har blomster</ul>
            <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Vi har mange blomster</ul>
            <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Vi har rigtig mange blomster</ul>
            <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Vi har ikke nogle blomster</ul>
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
</div>

<!-- Stor slutter -->

<?php include "includes/footer.html"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    <!-- Hero forsvinder -->
    var heroBg = document.getElementById('bg')
    window.addEventListener('scroll', function (){
        heroBg.style.opacity = 1 - +window.pageYOffset/650+''
        heroBg.style.top = +window.pageYOffset+'px'
        heroBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })

    var logosBg = document.getElementById('logos')
    window.addEventListener('scroll', function (){
        logosBg.style.opacity = 1 - +window.pageYOffset/350+''
        logosBg.style.top = +window.pageYOffset+'px'
        logosBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })

    var knapsBg = document.getElementById('knaps')
    window.addEventListener('scroll', function (){
        knapsBg.style.opacity = 1 - +window.pageYOffset/700+''
        knapsBg.style.top = +window.pageYOffset+'px'
        knapsBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })

</script>

</body>
</html>
