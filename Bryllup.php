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

<body>
<?php include "includes/navigation.html"; ?>
<div class="py-5 text-center" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Bryllup</h5></div>

<div class="card" style="width: 18rem; font-family: 'Playfair Display'";>
    <div class="card-img-top" src="..." alt="Card image cap">
        <?php
        foreach ($produkter as $produkt){
            echo "</h5><br> <img alt='test' style='max-width: 25%;' src='images/" . $produkt->prodBillede . "'/>";}
        ?>

        <div class="card-body">
            <h5 class="card-title"></h5>
            <?php
            foreach ($produkter as $produkt){
                echo "<h5> <br>" . $produkt->prodNavn . "</h5>";}
            ?>

            <p class="card-text"></p>
            <?php
            foreach ($produkter as $produkt){
                echo "<br><h6> <br>" . $produkt->prodBeskrivelse . "<br>" . $produkt->prodPris . "</h6>";}
            ?>
        </div>
    </div>
</div>

<?php include "includes/footer.html"; ?>
</body>

</html>