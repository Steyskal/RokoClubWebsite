<?php
    $servername = "localhost";
    $username = "grageri";
    $password = "ilgkik##$4";
    $database = "grageri_roko";

    $dbc;

    function ConnectToDB(){

        // Create connection
        global $dbc;
        global $servername;
        global $username;
        global $password;
        global $database;

        $dbc = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$dbc) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $dbc;
        // echo "Connected successfully";
    }

    function CloseDBC(){
        global $dbc;
        $dbc->close();

        //echo "Connection closed";
    }
?>