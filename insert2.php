<?php
require "settings/init.php";

if (!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["buBillede"]["tmp_name"])){
        move_uploaded_file($file["buBillede"]["tmp_name"], "uploads/" . basename($file["buBillede"]["name"]));
    }

    $sql = "INSERT INTO buket (buNavn, buBeskrivelse, buId, buPris, buBillede) VALUES (:buNavn, :buBeskrivelse, :buId, :buPris, :buBillede)";
    $bind = [
        ":buNavn" => $data["buNavn"],
        ":buBeskrivelse" => $data["buBeskrivelse"],
        ":buId" => $data["buId"],
        ":buPris" => $data["buPris"],
        ":buBillede" => (!empty($file["buBillede"]["tmp_name"])) ? $file["buBillede"]["name"] : NULL,
    ];

    $db->sql($sql, $bind, false);

    echo "Produktet er nu indsat. <a href='insert2.php'>Indsæt et produkt mere</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/0a3ztzprally0eprqc4f0p37jzfzfl9xv6koxshqie43g1k6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

<form method="post" action="insert2.php" enctype="multipart/form-data">
    <div class="row">

        <div class="col-12 col-md-6">
            <label for="buNavn">Produkt navn</label>
            <input class="form-control" type="text" name="data[buNavn]" id="buNavn" placeholder="Produkt navn" value="">
        </div>
        <div class="col-12 col-md-6">
            <label for="buPris">Produkt pris</label>
            <input class="form-control" type="number" step="0,1" name="data[buPris]" id="buPris" placeholder="Produkt pris" value="">
        </div>
        <div class="col-12 col-md-6">
            <label for="buId">Produkt katagori</label>
            <input class="form-control" type="text" name="data[buId]" id="buId" placeholder="Produkt katagori" value="">
        </div>

        <div class="col-12">
            <label class="form-label" for="buBillede">Produkt billede</label>
            <input type="file" class="form-control" id="buBillede" name="buBillede">
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="buBeskrivelse">Produkt beskrivelse</label>
                <textarea class="form-control" name="data[buBeskrivelse]" id="buBeskrivelse" placeholder="Produkt beskrivelse"></textarea>
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-6">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
        </div>
    </div>
</form>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>
</body>
</html>
