<?php
$connect = mysqli_connect("localhost", "root", "", "webshop");
$tab_query = "SELECT * FROM kategori ORDER BY cateId ASC";
$tab_result = mysqli_query($connect, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;
while($row = mysqli_fetch_array($tab_result))
{
    if($i == 0)
    {
        $tab_menu .= '
   <li class="active"><a href="#'.$row["cateId"].'" data-toggle="tab">'.$row["cateNavn"].'</a></li>
  ';
        $tab_content .= '
   <div id="'.$row["prodCatagoryId"].'" class="tab-pane fade in active">
  ';
    }
    else
    {
        $tab_menu .= '
   <li><a href="#'.$row["cateId"].'" data-toggle="tab">'.$row["cateNavn"].'</a></li>
  ';
        $tab_content .= '
   <div id="'.$row["prodCatagoryId"].'" class="tab-pane fade">
  ';
    }
    $product_query = "SELECT * FROM produkter WHERE prodCatagoryId=1 ORDER BY prodNavn ASC";
    $product_result = mysqli_query($connect, $product_query);
    while($sub_row = mysqli_fetch_array($product_result))
    {
        $tab_content .= '
  <div class="col-md-3" style="margin-bottom:25px;">
   <img src="images/'.$sub_row["prodBillede"].'" class="img-responsive img-thumbnail" width="" alt=""/>
   <h4>'.$sub_row["prodNavn"]. "<br>" . $sub_row["prodPris"].'</h4>
  </div>
  ';
    }
    $tab_content .= '<div style="clear:both"></div></div>';
    $i++;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <title>Botanica</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<!-- <style>
    .thumbnail img {
        width:  100px;
        height: 100px;
    }
</style> -->

<body>

<div class="container">
    <h2 align="center">Anledninger</a></h2>
    <br />
    <ul class="nav nav-tabs">
        <?php
        echo $tab_menu;
        ?>
    </ul>
    <div class="tab-content">
        <br />
        <?php
        echo $tab_content;
        ?>
    </div>
</div>
</body>
</html>