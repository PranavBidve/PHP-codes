<?php

// echo "Cookies";

setcookie("Cookies1", "Hello", time() + 30, "/");



$strAddress = $_SERVER['REMOTE_ADDR'];
$strBrowser = $_SERVER['HTTP_USER_AGENT'];
$strOperatingSystem = $_ENV["NAME"];

$strInfo = "$strAddress::$strBrowser::$strOperatingSystem";
setcookie("somecookie4", $strInfo, time() + 7200);

$strReadCookie = $_COOKIE["somecookie4"];
$arrListOfStrings = explode("::", $strReadCookie);
echo "<p>$strInfo</p>";
echo "<p>Your IP address is: $arrListOfStrings[0] </p>";
echo "<p>Client Browser is: $arrListOfStrings[1] </p>";
echo "<p>Your OS is: $arrListOfStrings[2] </p>";



if ( isset($_COOKIE['Cookies1']) ) {
    echo $_COOKIE['Cookies1'];
} else
    echo "Not set";
