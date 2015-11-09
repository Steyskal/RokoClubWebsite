<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Roko Club Cjenik</title>

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
                <h6 class="roko-glow text-center">Klikni na logo za info!</h6>
            </div>

            <div class="col-md-offset-6 col-md-2">
                <a href="rokoinfo.php"><img class="roko-img-logos" src="img/Roko_Logo.png"></a>
                <h6 class="roko-glow text-center">Klikni na logo za info!</h6>
            </div>

            <div class="col-md-offset-3 col-md-6">
                <div id="carousel-example-generic" class="carousel" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <?php

                        for($i = 1; $i<=10; $i++){
                            echo "<li data-target='#carousel-example-generic' data-slide-to='{$i}'></li>";
                        }
                        ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="img/menu/Roko_cjenik_1.jpg" alt="Roko_cjenik_1">
                            <div class="carousel-caption"></div>
                        </div>

                        <?php

                        for($i = 2; $i<=11; $i++){
                            echo "<div class='item'>
                                        <img src='img/menu/Roko_cjenik_{$i}.jpg' alt='Roko_cjenik_{$i}'>
                                        <div class='carousel-caption'></div>
                                    </div>";
                        }
                        ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="roko-glypicon glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="roko-glypicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
                <div class="col-md-3">
                    <a href="index.php"><img class="roko-img-back" src="img/Back_button.png"></a>
                </div>
            </div>
        </div>
    </footer>
</html>