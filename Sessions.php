<?php

session_start();

echo "Session is started<br>";
// $_SESSION['name'] = "Pranav";
// $_SESSION['password'] = "VIT";
// $name = $_SESSION['name'];
// $pass = $_SESSION['password'];
// echo "Session saved $name $pass";

$_SESSION['view'] = 0;

// unset($_SESSION['view']);

echo "number of times visited " . $_SESSION['view'];
// session_destroy();
