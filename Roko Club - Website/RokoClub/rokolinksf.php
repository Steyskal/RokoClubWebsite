<?php
include "dbc.php";

    $type = $_GET["type"];

    $dbc = ConnectToDB();

    $sql = "SELECT * FROM links WHERE type = {$type}";

    $dbc->query("SET NAMES 'utf8'");
    $dbc->query("SET CHARACTER SET utf8");
    $dbc->query("SET SESSION collation_connection = 'utf8_unicode_ci'");

    $result = $dbc->query($sql);

    $links = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) {
            $links[] = $row;
            //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["description"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    CloseDBC();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <title>Roko Club</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap-cyborg.css" rel="stylesheet">

        <link href="css/sticky-footer.css" rel="stylesheet">
        <link href="css/roko-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <div class="row roko-body2">

        <div class="col-md-offset-10 col-md-2">
                <a href="rokoinfo.php"><img class="roko-img-logos" src="img/Roko_Logo.png"></a>
        </div>

        <?php
            foreach($links as $link){
                echo "<a href='rokoiframe.php?page={$link['url']}'>
                            <div class='col-md-4'>
                                <div class='panel panel-success'>
                                    <div class='panel-body''>
                                    </div>
                                    <div class='panel-heading'>
                                        <h3 class='text-center roko-text-event panel-title'>{$link['name']}</h3>
                                    </div>
                                </div>
                            </div>
                        </a>";
            }
        ?>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php"><img class="roko-img-back" src="img/Back_button.png"></a>
                </div>
            </div>
        </div>
    </footer>
</html>