
<!DOCTYPE html>

<html lang="en">

<head>
    <title>ANDES</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">adens@adens-ong.org</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>Téléphone: <span>+237696293804</span></p>
                        </div>
                        <div class="header-bar-text">
                            <p>Localisation: Cameroun,Adamaoua</p>
                        </div>
                    </div><!-- .col -->


                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->
    </header><!-- .site-header --> <br>

    <div class="container">
        <h4 class="text-center">Messages / Liste de messages</h4> <br>

        <?php

        $_config = require 'BD/config.php';
        $sgbd = $_config['sgbd'];
        $host = $_config['host'];
        $bdname = $_config['bdname'];
        $user = $_config['user'];
        $password = $_config['password'];

        $userdb = $sgbd . ':dbname=' . $bdname . ';host=' . $host;
        $conn = new PDO($userdb, $user, $password, null);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM commentaire");
        $stmt->execute();
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="row">Nom</th>
                    <th scope="row">Mail</th>
                    <th scope="row">Message</th>
                </tr>
            </thead>

            <?php
            // $result = $stmt->setFetchMode(PDO::FETCH_OBJ); 
            while ($lignes = $stmt -> fetch(PDO::FETCH_OBJ)) // On fait une boucle pour récupérer les résultats, le FETCH_OBJ peut être considéré comme le array.

            {
                $nameC = $lignes->nameC; // récupération de la valeur contenu dans la ligne 'nom'
                $emailC = $lignes->emailC;
                $messageC = $lignes->messageC;
            ?>
            <tr>
                <td> <?php echo $nameC ?></td>
                <td> <?php echo $emailC ?></td>
                <td> <?php echo $messageC ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>


    <!-- <a href="BD/andesBD.php"> creation</a> -->
    <footer class="site-footer">


        <div class="footer-bar">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> ANDES </p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>