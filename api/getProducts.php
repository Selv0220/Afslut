<?php
require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter WHERE prodCatagoryId = 1");

if (isset($_GET["categories"])) {
    $categoriesArray = explode(",", $_GET["categories"]);
    $sql .= "AND catKey IN ('" . implode("','", $categoriesArray) . "')";
    //$bind[":categories"] = implode("','", $categoriesArray);
    //echo(implode("','", $categoriesArray));
}

$products = $db->sql($sql, $bind);

header("HTTP/1.1 200 OK");
echo json_encode($products);
?>