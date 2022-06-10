<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "astelun.com.mysql";
    $DB_NAME = "astelun_combotanica_blomster";
    $DB_USER = "astelun_combotanica_blomster";
    $DB_PASS = "ingenkode";
}else{
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);