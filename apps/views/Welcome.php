<?php

use MiniMvc\Apps\Core\Bootstraping\Security;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="welcome message">
    <meta name="keywords" content="mini mvc php native project">
    <meta name="author" content="nagara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NAGARA/MINI MVC</title>

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('image/ico') ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('image/ico') ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('image/ico') ?>/favicon-16x16.png">
    <link rel="manifest" href="<?= asset() ?>site.webmanifest">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= asset('css/fontfamily.css') ?>">

    <link rel="stylesheet" href="<?= asset('css/style.min.css') ?>">

    <!-- Bootstrap 5 CDN-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="<?= asset('css/style.min.css') ?>">
    <style>
        body {
            background-color: #090909;
            color: whitesmoke
        }

        .release {
            display: inline-block;
            color: #00FF00 !important;
            text-decoration: none
        }

        .color-orange {
            color: #00FF00 !important
        }

        .release:hover {
            color: #FFFF00 !important
        }

        .nav-bottom {
            background-color: black !important
        }

        .card-custom {
            margin-top: 12rem
        }

        .creator {
            font-size: 12px
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark nav-bottom">
        <div class="container">
            <a class="navbar-brand color-orange">
                <h5> Nagara </h5>
            </a>
            <div class="d-flex">
                <p>view <a href="https://github.com/naagaraa/mini-mvc-php-native/tags" target="_blank" class="navbar-item release">release notes</a> for mini mvc 4.0.9</p>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row d-flex justify-content-center d-flex align-items-center mx-auto my-auto">
            <div class="col-6 align-self-center">
                <div class="card-custom text-center">

                    <h5 class="color-orange">The install worked successfully! Congratulations!</h5>
                    <span>
                        project mini mvc php native develop by eka jaya nagara as miyuki nagara, my background can't used framework popular php like CI or Laravel for finish exam "kerja praktik", so I'm develop this is.
                    </span>
                    <!-- <p class="mt-3 bg-warning text-dark">'trying edit this page at apps/views/welcome.php'</p> -->
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid nav-bottom fixed-bottom ">
        <div class="row">
            <div class="col">
                <p class="mt-3 creator text-start"> PHP Version <?= phpversion() ?></p>
            </div>
            <div class="col">
                <p class="mt-3 creator text-end"> Copyright &copy; 2018-<?= year_now() ?> Backend By Eka Jaya Nagara</p>
            </div>
        </div>
        <div class="row nav-bottom py-4 mx-5 my-4">
            <div class="col">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <i class="fas fa-code align-self-center"></i>
                    </div>
                    <div class="col">
                        <h5 class="color-orange"><a href="https://docs.minimvcphp.nagara.my.id" target="_blank" class="navbar-item release">Documentation</a></h5>
                        <span>Topics, references, & how to's</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <i class="fab fa-youtube align-self-center"></i>
                    </div>
                    <div class="col">
                        <h5 class="color-orange"><a href="https://www.youtube.com/playlist?list=PLK5_CL-hAKCf-H7snj3RlLVjrkJ7yql6o" target="_blank" class="navbar-item release">Video : Documentation</a></h5>
                        <span>Short documentation at youtube</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <i class="fab fa-github align-self-center"></i>
                    </div>
                    <div class="col">
                        <h5 class="color-orange"><a href="https://github.com/naagaraa/mini-mvc-php-native" target="_blank" class="navbar-item release">Start Github</a></h5>
                        <span>source code, fork & start</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <i class="fas fa-hand-holding-usd align-self-center"></i>
                    </div>
                    <div class="col">
                        <h5 class="color-orange"><a href="https://saweria.co/naagaraa" target="_blank" class="navbar-item release">Support</a></h5>
                        <span>donation support indonesia only</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="container text-center my-4">
		<p>Copyright &copy; 2018-<?= year_now() ?> Backend By Eka Jaya Nagara as miyuki nagara</p>
	</footer> -->

    <script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>