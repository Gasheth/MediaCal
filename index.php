<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Media Calendar</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7"> <h1>Media Calendar</h1></div>
            </div>
            <div class="row">
                <div class="col-md-7 well well-sm">
                    <h1>Nav</h1>
                    <table class="table table-striped"border="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Age</th>
                                <th>Sexe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td contenteditable="true">House</td>
                                <td contenteditable="true">Gregory</td>
                                <td contenteditable="true">54</td>
                                <td contenteditable="true">M</td>
                            </tr>
                            <tr>
                                <td>Sparrow</td>
                                <td>Jack</td>
                                <td>43</td>
                                <td>M</td>
                            </tr>
                            <tr>
                                <td>Granger</td>
                                <td>Hermione</td>
                                <td>18</td>
                                <td>F</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="row">
                <?php
                $nbDay = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
                setlocale (LC_TIME, 'fr_FR.utf8','fra');
                echo '<p>Nombre de jours dans le mois : ' . $nbDay . '<br></p>';
                $Day = 1;
                while ($Day <= $nbDay) {
                    ?>
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1  <?php if ($Day == 1){echo 'col-md-offset-' . (date('w',strtotime("1". date(' F Y'))) - 1);}?>">
                        <div class="panel <?php if ($Day == date('j')){echo 'panel-danger';}else{echo 'panel-primary';}?>">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $Day . ' ' . ucfirst(strftime('%A', strtotime($Day . date(' F Y'))));?></h3>
                            </div>
                            <div class="panel-body">
                                <p><input type="checkbox" name="VU" value="ON" /> <strong>The Big Bang Theory</strong><img class="img-rounded img-responsive" src="http://www.pogdesign.co.uk/cat/imgs/sismall/The-Big-Bang-Theory.jpg">
                                    S: 9 - Ep: 12<br>2:00am</p>
                            </div>
                        </div> 
                    </div>

                    <?php
                    $Day++;
                }
                ?>

            </div>
            <div class="row">
                <div class="col-md-7 well well-sm">
<?php
$AlertMessage = rand(1, 3);
if ($AlertMessage == 1) {
    ?>
                        <div class="alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="glyphicon glyphicon-ok"></i> Base de donnée modifié </strong> Le client a été ajouté correctement !
                        </div>
    <?php
}
if ($AlertMessage == 2) {
    ?>
                        <div class="alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="glyphicon glyphicon-remove"></i> Erreur </strong> La trajectoire du melon est incorrecte !
                        </div>
    <?php
}
if ($AlertMessage == 3) {
    ?>
                        <div class="alert alert-warning fade in">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="glyphicon glyphicon-alert"></i> Attention </strong> Le mot de passe n'est pas assez BADASS !
                        </div>
<?php } ?>
                    <h1>Nav</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7"> <h1>Footer</h1></div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>