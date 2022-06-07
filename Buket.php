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

<div class="container-fluid valgF py-5" style="font-family: 'Playfair Display'">
    <h5 class="section-header py-5 my-5" style="font-family: 'Playfair Display'; color: black">Vores produkter</h5>

    <div id="categoriesContainer" class="col-12 col-lg-2 pt-2">
    </div>
    <div class="col-12 col-lg-10">
        <div id="productsContainer" class="row g-2"> </div>
        <?php
        foreach ($produkter as $produkt){
        echo "<h2>" . $produkt->prodNavn . "</h2><br>" . $produkt->prodBeskrivelse;}
            ?>
        <div class="spinner hidden" id="productSpinner">
            <i class="fas fa-tractor fa-spin "></i>
        </div>
    </div>
</div>

<script type="module" src="js/products.js"></script>
<?php include "includes/footer.html"; ?>
</body>

</html>