<?php
require "settings/init.php";

$buket = $db->sql("SELECT * FROM buket");
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
<div class="py-5 text-center" id="Hertil"><h5 class="section-header py-5" style="font-family: 'Playfair Display'; color: black">Buketter</h5></div>

<!-- Side section starts here -->
<div class="container-fluid" style="font-family: 'Playfair Display'">
    <div class="row">
        <div class="col-xm-12 col-sm-12 col-md-5 col-lg-3 py-5 px-5">

            <div class="card align-items-center catagory1">


            </div>

            <div class="row">
                <div class="card align-items-center mb-4">
                    <div class="card-body">
                        <div class="py-3">
                            <h3>Kategori</h3>
                            <p>Lyserød</p>
                            <p>Lilla</p>
                            <p>Hvid</p>
                            <p>Rød</p>
                            <p>Orange</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Products section -->
        <div class="col-mx-12 col-sm-12 col-md-6 col-lg-9 py-5" style="font-family: 'Playfair Display'">

            <div class="card section-intro px-4">

                <div class="card-body">
                    <div class="card-header items-header">
                        <h4><b>Ordre</b></h4>
                    </div>

                    <div class="row py-3 items">


                        <div class="col-lg-4">
                            <form action=""
                                  method="post" enctype="multipart/form-data">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div>
                                            <img src="images/" <?php echo $buket['buBillede'];?> class="img-thumbnail" alt="Buket">
                                        </div>
                                        <h6 class="secondary"><?php echo $buket['buNavn'];?></h6>
                                        <h4 class="secondary"><?php echo $buket['buBeskrivelse'];?></h4>
                                        <h5>
                                            <span class="price"><b><?php echo $buket['buPris'];?></b></span>
                                        </h5>

                                        <input type="number" class="form-control mb-3" name="quantity" value="1">
                                        <input type="hidden" name="buId" value="<?php echo $buket['buId'];?>">
                                        <input type="hidden" name="buBillede" value="<?php echo $buket['buBillede'];?>">
                                        <input type="hidden" name="buNavn" value="<?php echo $buket['buNavn'];?>">
                                        <input type="hidden" name="buBeskrivelse" value="<?php echo $buket['buBeskrivelse'];?>">
                                        <input type="hidden" name="buPris" value="<?php echo $buket['buPris'];?>">
                                        <button type="submit" class="btn" style="background-color: #50694A;
                                        color: white;
                                        font-size: 16px;
                                        text-decoration: none;
                                        padding: 12px 24px;">
                                            Tilføj til kurv
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- side section ends -->


<!-- Products section ends -->

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