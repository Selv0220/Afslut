<?php
require "settings/init.php";

$Kondu = $db ->sql("SELECT * FROM produkter WHERE prodCatagoryId = 14");
$Val = $db ->sql("SELECT * FROM produkter WHERE prodCatagoryId = 13");
$Stud = $db ->sql("SELECT * FROM produkter WHERE prodCatagoryId = 12");
$Fods = $db ->sql("SELECT * FROM produkter WHERE prodCatagoryId = 11");
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
    <link href="/css/fail.css" rel="stylesheet" type="text/css" />

</head>

<style>

    /* Container needed to position the button. Adjust the width as needed */
    .container {
        position: relative;
        width: 300px;
        display: flex;
        align-items: center;
    }

    /* Make the image responsive */
    .container img {
        width: 48%;
        height: auto;
        margin-right:20px;
    }

    /* Style the button and place it in the middle of the container/image */
    .container .btn {
        position: absolute;
        top: 92%;
        left: 42%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #50694A;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .container .btn:hover {
        background-color: #EA9071;
        color: white;
    }

    .container .btn1 {
        position: absolute;
        top: 92%;
        left: 56%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #50694A;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .container .btn1:hover {
        background-color: #EA9071;
    }


    .navbar{
        background-color: #F7F4F1;
        font-family: "Playfair Display";
        color: black;

    }

    .footer{
        background-color: #50694A;
        font-family: "Playfair Display";
        color: white;
    }

    .big{
        height: 10vh;
    }

    #smartnav{
        background-color: #F7F4F1;
    }

    .nav-link{
        color: black;
        font-weight: bolder;
    }

    nav.sticky{
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        background-color: #F7F4F1;
    }

    h2{
        font-family: "Playfair Display";
        text-align: center;
    }

    .card-img-top {
        width: 100%;
        height: 25vw;
        object-fit: cover;
    }

    .card{
        margin-bottom: 30px;
    }

    .btn2 {
        position: center;
        top: 92%;
        left: 56%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #50694A;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn2:hover {
        background-color: #EA9071;
        color: white;
    }

</style>

<body style="background: #EFE8DE">
<?php include "includes/navigation.html"; ?>
<div class="py-5 text-center" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Anledninger</h5></div>

<div class="container">
    <img src="images/AS_valen.jpg" alt="Anled">
    <button class="btn">klik her</button>

    <p>
        Fødselsdag <br>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<br>

<div class="container">
    <p>
        Student <br>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <img src="images/AS_valen.jpg" alt="Anled">
    <button class="btn1">klik her</button>
</div>
<br>

<div class="container">
    <img src="images/AS_valen.jpg" alt="Anled">
    <button class="btn">klik her</button>

    <p>
        Valentines dag <br>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<br>

<div class="container">
    <p>
        Kondulance <br>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <img src="images/AS_valen.jpg" alt="Anled">
    <button class="btn1">klik her</button>
</div>
<br>

<br>
<h2>Fødselsdag</h2>
<div class="col-12 bg-danger opacity-25 py-1 justify-content-center"> </div>
<br>

<div class="row col-10 col-2 p-2 mx-auto my-5 my-lg-3 text-center">
    <?php
    foreach ($Fods as $produkt){
        echo "<div class='col-12 col-lg-4'><div class='card' style='width: 18rem;'>
  <img class='card-img-top' <img alt='test' src='images/" . $produkt -> prodBillede . "'>
  <div class='card-body'>
    <h5 class='card-title'>" . $produkt -> prodNavn . "</h5>
    <p class='card-text'><span>" . $produkt->prodBeskrivelse . "</span><span class='prodPris'>" . $produkt -> prodPris . "</span></p>
    <a href='linknavn/" . $produkt -> prodId . "' class='btn2'>Se detaljer</a>
  </div>
  </div>
</div>";
    }
    ?>
</div>

<br>
<h2>Student</h2>
<div class="col-12 bg-danger opacity-25 py-1 justify-content-center"> </div>
<br>

<div class="row col-10 col-2 p-2 mx-auto my-5 my-lg-3 text-center">
    <?php
    foreach ($Stud as $produkt){
        echo "<div class='col-12 col-lg-4'><div class='card' style='width: 18rem;'>
  <img class='card-img-top' <img alt='test' src='images/" . $produkt -> prodBillede . "'>
  <div class='card-body'>
    <h5 class='card-title'>" . $produkt -> prodNavn . "</h5>
    <p class='card-text'><span>" . $produkt->prodBeskrivelse . "</span><span class='prodPris'>" . $produkt -> prodPris . "</span></p>
    <a href='linknavn/" . $produkt -> prodId . "' class='btn2'>Se detaljer</a>
  </div>
  </div>
</div>";
    }
    ?>
</div>

<br>
<h2>Valentines dag</h2>
<div class="col-12 bg-danger opacity-25 py-1 justify-content-center"> </div>
<br>

<div class="row col-10 col-2 p-2 mx-auto my-5 my-lg-3 text-center">
    <?php
    foreach ($Val as $produkt){
        echo "<div class='col-12 col-lg-4'><div class='card' style='width: 18rem;'>
  <img class='card-img-top' <img alt='test' src='images/" . $produkt -> prodBillede . "'>
  <div class='card-body'>
    <h5 class='card-title'>" . $produkt -> prodNavn . "</h5>
    <p class='card-text'><span>" . $produkt->prodBeskrivelse . "</span><span class='prodPris'>" . $produkt -> prodPris . "</span></p>
    <a href='linknavn/" . $produkt -> prodId . "' class='btn2'>Se detaljer</a>
  </div>
  </div>
</div>";
    }
    ?>
</div>

<br>
<h2>Kondulance</h2>
<div class="col-12 bg-danger opacity-25 py-1 justify-content-center"> </div>
<br>

<div class="row col-10 col-2 p-2 mx-auto my-5 my-lg-3 text-center">
    <?php
    foreach ($Kondu as $produkt){
        echo "<div class='col-12 col-lg-4'><div class='card' style='width: 18rem;'>
  <img class='card-img-top' <img alt='test' src='images/" . $produkt -> prodBillede . "'>
  <div class='card-body'>
    <h5 class='card-title'>" . $produkt -> prodNavn . "</h5>
    <p class='card-text'><span>" . $produkt->prodBeskrivelse . "</span><span class='prodPris'>" . $produkt -> prodPris . "</span></p>
    <a href='linknavn/" . $produkt -> prodId . "' class='btn2'>Se detaljer</a>
  </div>
  </div>
</div>";
    }
    ?>
</div>
<br>


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

</body>

</html>