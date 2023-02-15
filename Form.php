<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {


    if (!empty($_POST['degree']))
        $degree = $_POST['degree'];

    $sid = $_POST['sid'];
    $subject = $_POST['subject'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if (!empty($_POST['gender']))
        $gender = $_POST['gender'];

    $email = $_POST['email'];
    // $comments = $_POST['comments'];

    echo "$degree<br>";
    echo "$sid<br>";
    echo "$subject<br>";
    echo "$fname<br>";
    echo "$lname<br>";
    echo "$gender<br>";
    echo "$email<br>";

    // $con = mysqli_connect("localhost", "scse", "scse", "scse");

    // $sqlTable = "CREATE TABLE Person ( name1 varchar(15), name2 varchar(15))";
    // $sqlInsert = "INSERT INTO TableName INTO Person(c1, c2, c3) VALUES (v1, v2, v3)";
    // $select = "SELECT colname FROM WHERE col = value";
    // $order = "SELECT colname FROM table ORDER BY colname ASC|DESC";
    // $update = "UPDATE table SET col1 = v1, col2 = v2 WHERE somecol = someval";


    // $result = mysqli_query($con, $select);

    // $num = mysqli_num_rows($show);

    // while($row = $mysqli_fetch_array($result))
    // {

    // }


    // mysql -u scse - p scse 
    // use scse
    // show tables;
    // sql command;
}
