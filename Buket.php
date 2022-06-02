<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8" />

    <title>Botanica - Blomster butik</title>

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

</head>

<body>
<div id="pageContainer">
    <?php include "includes/navigation.html"; ?>
    <div id="pageContent">

        <div class="container-lg">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-2">
                    <h2 class="page-feature-header">
                        Økologisk og lokalt

                    </h2>
                    <p class="page-feature-teaser">
                        Alle produkter i vores gårdbutik er fremstillet på vores gård og er <strong>100 %
                            økologiske</strong>.
                        <br>
                        Vi ønsker at bekæmpe <strong>madspil</strong>, så hos os finder du krumme agurker og
                        skæve løg.
                        <br>
                        <br>
                        Vores produkter kan købes i <strong>webshoppen</strong> eller <strong>fysisk</strong> i
                        vores hyggelige gårdbutik.
                    </p>
                </div>

                <div id="categoriesContainer" class="col-12 col-lg-2 pt-2">
                </div>

                <div class="col-12 col-lg-10">
                    <div id="productsContainer" class="row g-2">
                    </div>

                    <div class="spinner hidden" id="productSpinner">
                        <i class="fas fa-tractor fa-spin "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.html"; ?>
</div>

<script type="module" src="/js/products.js"></script>
</body>

</html>