<?php
include "dbc.php";

    $dbc = ConnectToDB();

    $sql = "SELECT * FROM posts WHERE type = 1 ORDER BY date";
    $result = $dbc->query($sql);

    $events = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) {
            $events[] = $row;
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

        <div class="row roko-body">
            <div class="col-md-4">
                <a href="becks.php"><h1>BECKS LOGO</h1></a>
            </div>

            <div class="col-md-8">
                <a href="event.php?num=<?php echo $events[0]['id']?>"> <!-- event.php&num=# -->
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <img class="event-promo event-promo-main" src="img/<?php echo $events[0]['banner']?>"> <!-- event#.png -->
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Klikni za event info!</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="event.php?num=<?php echo $events[1]['id']?>"> <!-- event.php&num=# -->
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <img class="event-promo event-promo-side" src="img/<?php echo $events[1]['banner']?>"> <!-- event#.png -->
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Klikni za event info!</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="event.php?num=<?php echo $events[2]['id']?>"> <!-- event.php&num=# -->
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <img class="event-promo event-promo-side" src="img/<?php echo $events[2]['banner']?>"> <!-- event#.png -->
                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">Klikni za event info!</h3>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="col-md-offset-3 col-md-6">
                    <a href="rokoinfo.php"><h1>ROKO LOGO</h1></a>
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