<?php
    include "../dbc.php";

    $dbc = ConnectToDB();

    $sql = "SELECT name FROM posts";
    $result = $dbc->query($sql);
    $eventNumber = $result->num_rows + 1;

    CloseDBC();

    $name = $_POST["inputName"];
    $type = $_POST["selectType"];

    if($type == "Event") {
        $type = 1;
        $typeString = "event";
    }
    else{
        $type = 2;
        $typeString = "promo";
    }

    $description = $_POST["inputDescription"];
    $date = $_POST["inputDate"];

    $target_dir = "../img/";
    $file_name = $typeString . $eventNumber . ".jpg";
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["inputImage"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG & PNG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["inputImage"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if(isset($_POST["qr"]))
        $qr = 1;
    else
        $qr = 0;

    echo $eventNumber . "<br>";
    echo $name . "<br>";
    echo $type . "<br>";
    echo $typeString . "<br>";
    echo $description . "<br>";
    echo $date . "<br>";
    echo $target_file . "<br>";
    echo $qr;

    $dbc = ConnectToDB();

    $sql = "INSERT INTO posts VALUES (DEFAULT, '{$name}', '{$description}', '{$file_name}', '{$date}', {$type}, {$qr})";

    if ($dbc->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $dbc->error;
    }

    CloseDBC();

    header('Location: index.php');
