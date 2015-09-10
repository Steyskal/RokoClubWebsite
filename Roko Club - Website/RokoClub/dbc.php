<?php
    const servername = "localhost";
    const username = "root";
    const password = "";
    const database = "roko_club";

    $dbc;

    function ConnectToDB(){

        // Create connection
        global $dbc;
        $dbc = mysqli_connect(servername, username, password, database);

        // Check connection
        if (!$dbc) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $dbc;
        //echo "Connected successfully";
    }

    function CloseDBC(){
        global $dbc;
        $dbc->close();

        //echo "Connection closed";
    }
?>