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
    <meta name="robots" content="All" />
    <meta name="author" content="Udgiver" />
    <meta name="copyright" content="Information om copyright" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Indexside med oversigt over produktkategorier samt fængende billeder." />
    <meta name="keywords" content="bestilling, blomsterbutik, service"/>
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="Botanica Blomster" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Botanica er en blomsterbutik, der tilbyder de fineste blomster, i samarbejde med top-klasse service og et fællesskab om at holde af blomster. Botanicas webshop giver også muligheden for at bestille dine blomster hjem online." />

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

<!-- Lille slutter -->




<!-- Stor starter -->

<div class="container-fluid hero" style="font-family: 'Playfair Display'" id="bg">
    <div class="row bodybg2">
        <div class="col-lg-6 text-center my-auto">
            <div class="navbar-brand border-0 col-lg-7 mx-auto" style="background-color: #F7F4F1; border-radius: 35px">
                <img src="images/BLogo.png" class="logo col-10" alt="Botanica">
            </div>

            <a href="#Nede">
                <button class="navbar-brand border-0 col-lg-1 bg-transparent py-5">
                    <img src="images/downer_alt.png" class="pil kat col-12" alt="Pil ned">
                </button>
            </a>

        </div>
        <div class="col-6 m-0 p-0 toppen">
            <img src="images/annie-splash.png" alt="Blomster billede" class="img-fluid vh-100 float-lg-end">
        </div>
    </div>
</div>



<div class="m-0 p-0 d-flex flex-row-reverse">
    <img src="images/dum_plante.png" alt="Blomster billede" class="bagved m-0 p-0" style="position: fixed">
</div>

<div class="big">
    <?php include "includes/navigation.html"; ?>
    <button class="navbar-brand border-0 col-12 bg-transparent tiny position-absolute bottom-0">
        <a href="#mini"><img src="images/downer_alt.png" class="pil kat col-2" alt="Pil ned"></a>
    </button>
</div>
<div class="container-fluid py-5 col-8 col-lg-12" style="font-family: 'Playfair Display'" id="mini">
    <h3 class="section-header my-5 hero" style="font-family: 'Playfair Display'; color: black">Produktkategorier</h3>

    <div class="row">
        <div class="card col-10 col-lg-3 p-0 mx-auto my-5 my-lg-0">
            <button class="card-body kat bodybg1 border-0">
                <h3 class="card-title text-center">Buketter</h3>
                <img src="images/IC_buket.jpg" class="card-img-top" alt="Blomster buket">
            </button>
        </div>
        <div class="card col-10 col-lg-3 p-0 mx-auto mt-5 my-lg-0">
            <button class="card-body kat bodybg3 border-0">
                <h3 class="card-title text-center">Bryllup</h3>
                <img src="images/DF_bryl.jpg" class="card-img-top" alt="Brude par">
            </button>
        </div>
    </div>

    <div class="row my-5 py-5">
        <div class="card col-10 col-lg-3 p-0 mx-auto my-5 my-lg-0">
            <button class="card-body kat bodybg3 border-0">
                <h3 class="card-title text-center">Begravelse</h3>
                <img src="images/RL_grav.jpg" class="card-img-top" alt="Begravelse">
            </button>
        </div>
        <div class="card col-10 col-lg-3 p-0 mx-auto my-5 my-lg-0">
            <button class="card-body kat bodybg1 border-0">
                <h3 class="card-title text-center">Anledning</h3>
                <img src="images/AS_valen.jpg" class="card-img-top" alt="Blomster hjerte">
            </button>
        </div>
        <div class="card col-10 col-lg-3 p-0 mx-auto my-5 my-lg-0">
            <button class="card-body kat bodybg3 border-0">
                <h3 class="card-title text-center">Tilbehør</h3>
                <img src="images/EK_choco.jpg" class="card-img-top" alt="Chokolader">
            </button>
        </div>
    </div>
</div>

<div class="valgF py-5 hero">
    <h3 class="section-header py-2" style="font-family: 'Playfair Display'; color: black">Lad dig blive inspireret</h3>
    <div id="carouselExampleDark" class="carousel slide carousel-dark carousel-fade col-lg-4 mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="images/annie-splash.png" class="d-block w-75 mx-auto" alt="Plante">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/hero_varer.jpg" class="d-block w-75 mx-auto" alt="Butik">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/IC_buket.jpg" class="d-block w-75 mx-auto" alt="Blomsterbuket">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/AS_valen.jpg" class="d-block w-75 mx-auto" alt="Blomster hjerte">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/DF_bryl.jpg" class="d-block w-75 mx-auto" alt="Brudepar">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/EK_choco.jpg" class="d-block w-75 mx-auto" alt="Chokolade">
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

<div class="box text-center py-3" style="background-color:white; font-family: 'Playfair Display'; color: black">
    <h2 class="section-header py-4" style="font-family: 'Playfair Display'; color: black">Hos os får du altid:</h2>
    <div class="box-body pb-2">
        <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Mulighed for online bestilling</ul>
        <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Bredt udvalg af blomster og brugskunst</ul>
        <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Den bedste service</ul>
        <ul><img src="images/blad_logo.png" width="22" alt="blad ikon"> Gode råd og fif til at holde dine blomster længere</ul>
    </div>
</div>

</div>

<!-- Stor slutter -->

<?php include "includes/footer.html"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    var smartnav = document.getElementById("smartnav");
    window.onscroll = function (){
        if(window.pageYOffset > smartnav.offsetTop){
            smartnav.classList.add("sticky");
        }
        else{
            smartnav.classList.remove("sticky");
        }
    }
</script>
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
        logosBg.style.opacity = 1 - +window.pageYOffset/250+''
        logosBg.style.top = +window.pageYOffset+'px'
        logosBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })

    var knapsBg = document.getElementById('knaps')
    window.addEventListener('scroll', function (){
        knapsBg.style.opacity = 1 - +window.pageYOffset/600+''
        knapsBg.style.top = +window.pageYOffset+'px'
        knapsBg.style.backgroundPositionY = +window.pageYOffset
            /2+'px'
    })

</script>

</body>
</html>
