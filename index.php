<?php 
$conn = mysqli_connect('localhost', 'root', '', 'rg', '3307');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.
echo '<table class="table table-bordered table-condensed">';
echo '<tr>';
echo '<th>Id</th>';
echo '<th>Prenom</th>';
echo '<th>Nom</th>';
echo '<th>Email</th>';
echo '<th>Add1</th>';
echo '</tr>';
$result = mysqli_query($conn, 'SELECT `Id`, `Prenom`, `Nom`, `Email`, `Add1` FROM `user`');
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    echo '<tr>';
    echo '<td>' . $row['Id'] . '</td>';
    echo '<td>' . $row['Prenom'] . '</td>';
    echo '<td>' . $row['Nom'] . '</td>';
    echo '<td>' . $row['Email'] . '</td>';
    echo '<td>' . $row['Add1'] . '</td>';
    echo '</tr>';
}
mysqli_free_result($result);
echo '</table>';
mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>


        <link href="css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7"> <h1>TV CALENDAR</h1></div>
            </div>
            <div class="row">
                <div class="col-md-7 well well-sm"> <h1>Nav</h1></div>
            </div>
            <div class="row">
                <div class="col-md-1"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div></div>
                <div class="col-md-1"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div></div>
                <div class="col-md-1"><div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">4 Lundi</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                            <p><img class="img-rounded img-responsive" src="http://www.pogdesign.co.uk/cat/imgs/sismall/The-Big-Bang-Theory.jpg"></p>
                        </div>
                    </div></div>
                <div class="col-md-1"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div></div>
                <div class="col-md-1"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div></div>
                <div class="col-md-1"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div></div>
                <div class="col-md-1"><div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div></div>
            </div>
            <div class="row">
                <div class="col-md-7 well well-sm"> <h1>Nav</h1></div>
            </div>
            <div class="row">
                <div class="col-md-7"> <h1>Footer</h1></div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>