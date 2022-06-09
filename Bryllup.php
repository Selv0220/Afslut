<?php
require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter WHERE prodCatagoryId = 1");
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
        left: 35%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .container .btn:hover {
        background-color: black;
    }

    .container .btn1 {
        position: absolute;
        top: 92%;
        left: 63%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #555;
        color: white;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .container .btn1:hover {
        background-color: black;
    }

    .row{
        justify-content: center;
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
</style>

<body>
<?php include "includes/navigation.html"; ?>
<div class="py-5 text-center" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Bryllup</h5></div>

<div class="container">
    <img src="images/DF_bryl.jpg" alt="Wedding">
    <button class="btn">klik her</button>

    <p>
        dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<br>

<div class="container">
    <p>
        dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <img src="images/DF_bryl.jpg" alt="Wedding">
    <button class="btn1">klik her</button>
</div>
<br>

<div class="container">
    <img src="images/DF_bryl.jpg" alt="Wedding">
    <button class="btn">klik her</button>

    <p>
        dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<br>

<div class="container">
    <p>
        dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <img src="images/DF_bryl.jpg" alt="Wedding">
    <button class="btn1">klik her</button>
</div>
<br>

<div class="row text-center">
    <?php
    foreach ($produkter as $produkt){
        echo "<div class='col-12 col-lg-4'><div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='/uploads'" . $produkt -> prodBillede ." alt='" . $produkt -> prodName . "'>
  <div class='card-body'>
    <h5 class='card-title'>" . $produkt -> prodName . "</h5>
    <p class='card-text'><span>" . $produkt->prodBeskrivelse . "</span><span class='prodPris'>" . $produkt -> prodPris . "</span></p>
    <a href='linknavn/" . $produkt -> prodId . "' class='btn btn-primary'>Se detaljer</a>
  </div>
  </div>
</div>";
        }
    ?>
</div>

<br>

<?php include "includes/footer.html"; ?>
</body>

</html>