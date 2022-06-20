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
    .btn-btn:hover {
        background-color: #EA9071;
        color: white;
    }

</style>

<body style="background: #EFE8DE">
<?php include "includes/navigation.html"; ?>
<div class="py-5 text-center" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Levering</h5></div>

<div class="container-fluid md-5" style="font-family: 'Playfair Display'">
    <div class="row px-5 py-2">
        <div class="col-md-7">
            <h5>Ordre</h5>
            <div class="card px-3 mb-5">
                <div class="card-body">
                    <div class="row">

                        <!-- Product image -->
                        <div class="col-md-4">
                            <img src="images/Brudebuket.jpg" class="img-fluid" alt="Product">
                        </div>
                        <div class="col-md-4">
                            <h5>Den klasiske buket</h5>
                            <h6><b>Bukettens hvide farver symbolisere det rene og sarte. </b></h6>
                            <h5>
                                <span class="price">450 KR </span>
                            </h5>
                        </div>
                        <div class="col-md-4 py-5 px-5">
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-4 py-5 px-5">
                            <input type="submit" value="Fjern" class="btn" style="background-color: #EA9071;
                                        color: white;
                                        font-size: 16px;
                                        text-decoration: none;
                                        padding: 12px 24px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Price section -->
        <div class="col-md-5 py-5 px-5">
            <div class="card">
                <div class="card-body">
                    <b>Din bestilling</b>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <h5>Pris</h5>
                        </div>
                        <div class="col-md-5">
                            <h5 class="float-right">
                                450 KR
                            </h5>
                        </div>
                        <!-- Price section -->
                        <div class="row">
                            <div class="col-md-5 py-4">
                                <h5>Levering</h5>
                            </div>
                            <div class="col-md-5 py-4">
                                <h5 class="float-right py-4">
                                    75 KR
                                </h5>
                            </div>
                            <hr>

                            <!-- Total Price section -->
                            <div class="row">
                                <div class="col-md-5 py-4">
                                    <h5><b>Total</b></h5>
                                </div>
                                <div class="col-md-5 py-4">
                                    <h5 class="float-right"><b>525 KR </b></h5>
                                    <br>
                                    <input type="submit" value="Forsæt til betaling" class="btn" style="background-color: #EA9071;
                                        color: white;
                                        font-size: 16px;
                                        text-decoration: none;
                                        margin: -45px;
                                        padding: 12px 24px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




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