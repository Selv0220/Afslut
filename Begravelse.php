<?php
require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter WHERE prodCatagoryId = 2");
?>

<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8" />

    <title>Botanica - Blomster butik</title>

    <link rel="icon" href="images/blad_logo.png">

    <!--META -->
    <meta name="robots" content="All" />
    <meta name="author" content="Udgiver" />
    <meta name="copyright" content="Information om copyright" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Oversigt over produkter" />
    <meta name="keywords" content="blomster, frisk, farver" />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="Botanica - Blomster butik" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Oversigt over produkter" />

    <link href="/css/Bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/css/styles.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include "includes/navigation.html"; ?>
<div class="py-5 text-center" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Begravelse</h5></div>

<div class="post-wrapper">
    <div class="post">
        <img src="images/Brudebuket.jpg" alt="" class="slider-image">
        <div class="post-info">
            <h4> <a href="#"> Burdebuketter til alle</a></h4>
            &nbsp;
            <i class="far fa-user">halløj</i>
        </div>
    </div>

    <div class="post">
        <img src="images/Brudebuket.jpg" alt="" class="slider-image">
        <div class="post-info">
            <h4> <a href="#"> Burdebuketter til alle</a></h4>
            &nbsp;
            <i class="far fa-user">halløj</i>
        </div>
    </div>

    <div class="post">
        <img src="images/Brudebuket.jpg" alt="" class="slider-image">
        <div class="post-info">
            <h4> <a href="#"> Burdebuketter til alle</a></h4>
            &nbsp;
            <i class="far fa-user">halløj</i>
        </div>
    </div>

    <div class="post">
        <img src="images/Brudebuket.jpg" alt="" class="slider-image">
        <div class="post-info">
            <h4> <a href="#"> Burdebuketter til alle</a></h4>
            &nbsp;
            <i class="far fa-user">halløj</i>
        </div>
    </div>

    <!-- Main content -->

    <div class="main-content">
        <h1 class="recent-post-title"> Recent posts</h1>

        <div class="post clearfix">
            <img src="images/Brudebuket2.jpg" alt="" class="post-image">
            <div class="post-preview"
            <h2> <a href="#"> Hi hi</a></h2>
            <i class="far fa-user">halløj</i>
            &nbsp;
            <i class="far fa-user">halløj</i>
            <p class="preview-text">
                bla bla bla
            </p>
        </div>
    </div>

    <div class="post clearfix">
        <img src="images/Brudebuket2.jpg" alt="" class="post-image">
        <div class="post-preview">
            <h2> <a href="#"> Hi hi</a></h2>
            <i class="far fa-user">halløj</i>
            &nbsp;
            <i class="far fa-user">halløj</i>
            <p class="preview-text">
                bla bla bla
            </p>
        </div>
    </div>

    <!-- Catagories -->
    <div class="sidebar">
        <div class="section topics">
            <h2 class="section title">Oversigt</h2>
            <ul>
                <li> <a href="#"> Brudebuket</a> </li>
                <li> <a href="#"> Begravelse</a> </li>
                <li> <a href="#"> Anledning</a> </li>
                <li> <a href="#"> Tilbehør</a> </li>
            </ul>
        </div>
    </div>
</div>

<?php include "includes/footer.html"; ?>
</body>

</html>

