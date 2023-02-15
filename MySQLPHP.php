<?php

$con = mysqli_connect("localhost", "root", "", "<database name>");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// $sql = "CREATE TABLE Users( Name varchar(15),Email varchar(30),Phone varchar(12), ADDRESS varchar(100) )";

// if (!mysqli_query($con, $sql)) {
//     echo "Error in creating table";
// } else
//     echo "Table created successfully<br>";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub'])) {


    if (!$con) {
        die("Error!");
    } else {
        echo "Connection Sucessful!<br>";
        // echo "<br>" . "$name" . "$email" . "$phone" . "$address";

        $sqlInsert = "INSERT INTO `Users`(`Name`,`Email`,`Phone`,`Address`) VALUES ('$name', '$email', '$phone', '$address')";

        $result = mysqli_query($con, $sqlInsert);
        if (!$result) {
            echo "Error in inserting";
        } else {
            echo "<br>Record created successfully<br>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dis'])) {

    $show = "SELECT * FROM users";   // Highlighting
    $showQuery = mysqli_query($con, $show);
    $num = mysqli_num_rows($showQuery);
    echo "There are $num rows";
    echo "<br>";

    echo "Printing rows<br>";

    $txt = "<table border = 1 cellpadding = 5><tr><td>Name</td><td>Email</td><td>Phone</td><td>Address</td></tr>";

    $i = 0;
    $names = array();
    $new = array();

    while ($row = mysqli_fetch_row($showQuery)) {

       $txt .= "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
    }


    echo $txt . "</table>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['up'])) {

    $con = mysqli_connect("localhost", "root", "", "OROM");
    $upName = $_POST['upName'];

    $query = "UPDATE users SET `Name` = $upName WHERE `Name` = $name";
    // if (!mysqli_query($con, $query))
    //     echo "Error";
    // else
    echo "Updated successfully!";
}


// Table name - items

// SQL query to insert data into items table

// $sqlAdd = "INSERT INTO `items`(`item_type`, `item`, `Price`) VALUES ($it, $item, $price)";

// $sqlDelete = "DELETE FROM items WHERE item = 'Bat' AND price = '500'";

// $sqlSearch = "SELECT item, price FROM `items` WHERE price > '1000'";

// $sqlUpdate = "UPDATE items SET item = 'ball' WHERE item = 'bat'";

// $sqlArrange = "SELECT `Price FROM `items` ORDER BY ASC";

