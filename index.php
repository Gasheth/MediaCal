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
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
       /* include_once 'config.php';
        $timeDB = 1452213333;
        $mirrorPath = "http://thetvdb.com";
        $serieID = 79349;
        $resultSerie = $mirrorPath . "/api/" . $ApiKey . "/series/" . $serieID . "/all/fr.zip";
        $tmpFile = 'tmp.zip';
        echo '<a href="' . $mirrorPath . "/api/" . $ApiKey . "/series/" . $serieID . "/all/fr.zip" . '">' . $mirrorPath . "/api/" . $ApiKey . "/series/" . $serieID . "/all/fr.zip" . '</a>';

 

        if (!copy($resultSerie, $tmpFile)) {
            echo "failed to copy $tmpFile...\n";
        }

        $zip = new ZipArchive();
        if ($zip->open($tmpFile, ZIPARCHIVE::CREATE) !== TRUE) {
            exit("cannot open <$filename>\n");
        }*/
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 banner">

                    <nav class="navbar navbar-default navbar-inverse navbanner">
                        <div class="col-md-3 col-md-offset-2">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse-bs" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>
                            <div class="collapse navbar-collapse" id="nav-collapse-bs">
                                <ul class="nav navbar-nav">
                                    <li> <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-calendar"></i></a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                                    <li><a data-toggle="modal" data-target="#loginModal" href="#"><i class="glyphicon glyphicon-log-in"></i></a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-floppy-save"></i></a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-log-out"></i></a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-list"></i></a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
                                </ul>
                            </div>
                    </nav>  



                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Connexion</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg">Connexion au compte</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <p class="text-left pull-left">
                                        <a href="#">S'enregistrer</a><br>
                                        <a href="#">Mot de passe oublié</a><p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
        <div class="row calendar">
            <?php
            $nbDay = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
            //echo '<p>Nombre de jours dans le mois : ' . $nbDay . '<br></p>';
            $imgRand = array("http://www.pogdesign.co.uk/cat/imgs/sismall/Suits.jpg", "http://www.pogdesign.co.uk/cat/imgs/sismall/The-Big-Bang-Theory.jpg", "http://www.pogdesign.co.uk/cat/imgs/sismall/Banshee.jpg");
            $Day = 1;
            $AlertMessage = rand(1, 3);
            while ($Day <= $nbDay) {
                $idRandImg = rand(0, 2);
                ?>
                <div class="col-md-1 col-sm-1 col-xs-7 col-lg-1  <?php
                if ($Day == 1) {
                    echo 'col-md-offset-' . (date('w', strtotime("1" . date(' F Y'))) - 1);
                }
                ?>">
                    <div class="panel <?php
                    if ($Day == date('j')) {
                        echo 'panel-primary current-day';
                    } else {
                        echo 'panel-primary';
                    }
                    ?>">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $Day . ' ' . ucfirst(strftime('%A', strtotime($Day . date(' F Y')))); ?></h3>
                        </div>
                        <div class="panel-body">
                            <p><input type="checkbox" name="VU" value="ON" /> <strong>The Big Bang Theory</strong><img class="img-rounded img-responsive" src="<?php echo $imgRand[$idRandImg]; ?>">
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
            <div class="col-md-7">
                <footer class="footer">

                    <p class="text-muted">Place sticky footer content here.</p>

                </footer>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>