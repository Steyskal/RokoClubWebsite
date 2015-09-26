<?php
include "dbc.php";

    $event_id = $_GET["num"];

    $dbc = ConnectToDB();

    $sql = "SELECT * FROM posts WHERE id = {$event_id}";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) {
            $event = $row;
            //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["description"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $date = date_create($event["date"]);

    CloseDBC();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Event</title>

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

        <div class="row roko-body">
            <div class="col-md-4">
                <a href="becks.php"><img class="roko-img-logos" src="img/becks_logo.png"></a>
            </div>

            <div class="col-md-8">
                <div class="col-md-12">
                    <img class="event-promo event-promo-main" src="img/<?php echo $event['banner']?>"> <!-- event#.png -->
                </div>

                <div class="col-md-12">
                    <div class="roko-panel panel panel-default">
                        <div class="panel-heading"><h5><?php echo $event['name']?></h5> <!-- event# name --></div>
                        <div class="roko-panel-body panel-body">
                            <p class="text-muted text-justify"><?php echo $event['description']?></p> <!-- event# description -->
                            <h6 class="text-muted"><?php echo date_format($date,"d/m/Y")?></h6> <!-- event# date -->
                            <h6 class="text-muted">ROKO Club&Lounge</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <a href="index.php"><img class="roko-img-back" src="img/Back_button.png"></a>
                </div>

                <div class="col-md-6">
                    <a href="rokoinfo.php"><img class="roko-img-logos" src="img/Roko_Logo.png"></a>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <img class="dd3d-logo" src="img/dd3d_logo.png">
                    <p class="dd3d-info text-muted">info@dd3d.hr</p>
                </div>
            </div>
        </div>
    </footer>

</html>