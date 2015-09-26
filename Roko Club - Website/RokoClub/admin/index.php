<?php
include "../dbc.php";

    $dbc = ConnectToDB();

    $sql = "SELECT * FROM posts WHERE deleted = 0 ORDER BY date";
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
        <link href="../css/bootstrap-cyborg.css" rel="stylesheet">

        <link href="../css/sticky-footer.css" rel="stylesheet">
        <link href="../css/roko-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row roko-body">
                <div class="list-group">

                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">Popis postojećih postova</h4>
                        <table class="roko-table table table-hover ">
                            <thead>
                                <tr>
                                    <th>Naziv</th>
                                    <th>Datum</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($events as $event){
                                        echo "<tr class='active'>
                                                <td>{$event['name']}</td>
                                                <td>{$event['date']}</td>
                                                <td class='text-center'><div class='btn btn-danger' name='{$event['id']}'>Obriši</div></td>
                                            </tr>";
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="list-group-item roko-posts-divider">
                    </div>

                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">Dodavanje novog posta</h4>
                        <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group col-md-8">
                                    <label for="inputName" class="roko-label col-md-12 control-label">Naziv:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Naziv">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="selectType" class="roko-label col-md-12 control-label">Tip:</label>
                                    <div class="col-md-12">
                                        <select class="form-control" id="selectType" name="selectType">
                                            <option>Event</option>
                                            <option>Promocija</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputDescription" class="roko-label col-md-12 control-label">Opis:</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="3" id="inputDescription" name="inputDescription"></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputDate" class="roko-label col-md-12 control-label">Datum:</label>
                                    <div class="col-md-12">
                                        <input type="date" name="inputDate" id="inputDate" name="inputDate">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputImage" class="roko-label col-md-12 control-label">Banner:</label>
                                    <div class="col-md-12">
                                        <input type="file" name="inputImage" id="inputImage">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword" class="roko-label col-md-3 control-label">Generiraj QR kod</label>
                                    <div class="col-md-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="qr">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-offset-4 col-md-8">
                                        <button type="submit" class="btn btn-primary">Dodaj</button>
                                        <button type="reset" class="btn btn-default">Poništi</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <a href="../index.php"><img class="roko-img-back" src="../img/Back_button.png"></a>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </body>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <img class="dd3d-logo" src="../img/dd3d_logo.png">
                    <p class="dd3d-info text-muted">info@dd3d.hr</p>
                </div>
            </div>
        </div>
    </footer>

</html>