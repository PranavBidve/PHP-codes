<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying your files</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
       
        <label for="file">File Upload:</label><br><br>
        <input type="file" name="myfile">
        <br><br>

        <input type="submit" name="sub" value="Upload">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sub'])) {

        // $fname = $_POST["myname"];
        // $password = $_POST["mypass"];
        $text = "";


        $myfile = $_FILES["myfile"];

        $file_name = $myfile["name"];
        $file_type = $myfile["type"];
        $file_tmp_name = $myfile["tmp_name"];
        $file_error = $myfile["error"];
        $file_size = $myfile["size"];
        $file_store = "Postcard/" . $file_name;



        // if ($file_size >= 30) {
        //     move_uploaded_file($file_tmp_name, $file_store);
        //     echo "File uploaded successfully!!<br>";

            // echo "<br>";
            // echo $fname . " " . $password;
            // echo "<br>";

            echo "<table border = 1 cellpadding = 5><tr><td>File name</td><td>File Size</td><td>Temporary Location</td><td>File Type</td><td>Error</td></tr><tr><td>$file_name</d><td>$file_size</td><td>$file_tmp_name</td><td>$file_type</td><td>$file_error</td></tr></table> ";
        } else {
            echo "File cannot be uploaded!!";
        }
    }
    ?>



</html>