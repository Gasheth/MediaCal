<!DOCTYPE html>
<html lang="fr">
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
        <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); ?>
        <div class="container-fluid">
            <div class="row banner">
                <div class="col-md-7">
                    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse-bs" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-calendar"></i> MediaCal</a>
                        </div>
                        <div class="collapse navbar-collapse" id="nav-collapse-bs">
                            <ul class="nav navbar-nav">
                            </ul>
                            <div class="row">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                    <li><a href="#">Logout</a></li>
                                    <li><a href="#">Settings</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Today</a></li>
                                    <li><a href="#">Lists</a></li>
                                    <li><a href="#">Renewed/Cancelled</a></li>
                                    <li><a href="#">Statistics</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <nav>
                        <ul class="pager">
                            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> <?php echo utf8_encode(ucfirst(strftime("%B", strtotime("first day of previous month")))); ?></a></li>
                            <li class="next"><a href="#"><?php echo utf8_encode(ucfirst(strftime("%B", strtotime("first day of next month")))); ?> <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <?php
                $nbDay = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
                echo '<p>Nombre de jours dans le mois : ' . $nbDay . '<br></p>';
                $Day = 1;
                while ($Day <= $nbDay) {
                    ?>
                    <div class="col-md-1 col-sm-1 col-xs-7 col-lg-1  <?php
                    if ($Day == 1) {
                        echo 'col-md-offset-' . (date('w', strtotime("1" . date(' F Y'))) - 1);
                    }
                    ?>">
                        <div class="panel <?php
                        if ($Day == date('j')) {
                            echo 'panel-danger';
                        } else {
                            echo 'panel-primary';
                        }
                        ?>">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $Day . ' ' . ucfirst(strftime('%A', strtotime($Day . date(' F Y')))); ?></h3>
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
                <div class="col-md-7">
                    <nav>
                        <ul class="pager">
                            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> <?php echo utf8_encode(ucfirst(strftime("%B", strtotime("first day of previous month")))); ?></a></li>
                            <li class="next"><a href="#"><?php echo utf8_encode(ucfirst(strftime("%B", strtotime("first day of next month")))); ?> <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>
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
                        <?php
                    }
                    ?>
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