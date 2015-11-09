<?php
include "../dbc.php";

    $id = $_POST["id"];

    $dbc = ConnectToDB();

    $sql = "UPDATE posts SET deleted = 1 WHERE id = {$id}";
    $result = $dbc->query($sql);

    if ($result) {
        echo "Updated!";
    } else {
        echo "Error";
    }

    CloseDBC();

?>