<?php

    $page = $_GET["page"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Roko Club Iframe</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap-cyborg.css" rel="stylesheet">

        <link href="css/roko-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <div class="row roko-body-iframe">
        <div class="col-md-4">
            <a href="index.php"><img class="roko-img-back" src="img/Back_button.png"></a>
        </div>

        <div class="col-md-offset-4 col-md-4">
            <div class="col-md-offset-3 col-md-6">
                <a href="rokoinfo.php"><img class="roko-img-logos" src="img/Roko_Logo.png"></a>
            </div>
        </div>

        <iframe class="roko-iframe center-block" src="<?php echo $page?>"></iframe>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/rokolinks.js"></script>
    </body>

    <!-- <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <img class="dd3d-logo" src="../img/dd3d_logo.png">
                        <p class="dd3d-info text-muted">info@dd3d.hr</p>
                    </div>
                </div>
            </div>
        </footer> -->
</html>