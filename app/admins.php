<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Alfabetiza Ya!</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/AlfabetizaYa.png" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <header id="header" class="fixed-top " style="opacity: 1;">
        <div class="container d-flex align-items-center">
            <img src="./assets/img/AlfabetizaYa.png" class="img-fluid animated" alt="" style="height: 70px ; width: 60px; margin-right: 20px; ">

            <h1 class="logo mr-auto" style="color: white;">Alfabetiza ya!</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <!-- <li><a href="">Sitio </a></li> -->
                    <!-- <li><a href="#search">Administrar </a></li> -->
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>

                </ul>
            </nav>
            <!-- .nav-menu -->



            <div class="dropdown" style="display:inline-block ; position: relative; margin-top: 20px;">
                <div class="profile">
                    <img class="profile" src="assets/img/portfolio/profile.svg">
                    <p><?php if (!isset($_SESSION["nomUsuario"])){
                            header('Location: http://localhost:8080/index.html');
                        }
                        else {
                            echo "Bienvenid@ <br> " . $_SESSION["nomUsuario"];
                        } ?></p>  
                </div>
                <br>
                <div class="dropdown-content" style="background-color: white; border-radius:15px;">
                <a href="http://localhost:8080/CerrarSes.php"><button style="color: white; background-color:rgb(0, 255, 68); width: 100%; height: 30px;">Cerrar Sesión</button></a>
                </div>

            </div>


        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Header ======= -->


    <br>
    <br>
    <br>
    <br>
    <!-- ======= Hero Section ======= -->

    <section id="search" class="d-flex align-items-center">
        <div class="container">
            <p style="   
                margin-top: auto;
                margin-bottom: 0px;
                font-family: Tuskergrotesk, sans-serif;
                color: #ffffff;
                font-size: 3.5em;
                line-height: 1.2;
                font-weight: 700;
                letter-spacing: -0.03em;
                align-items: center;"><br>Administra a los<br>estudiantes aquí<br></p>
            <br>
            <br>


            <div class="container">
                <div >
                    <span><a href="search.php"><button   style="background-color: green ; height: 40px; width: 180px; border-radius: 200px;  color: #ffffff; font-weight: bold;">Lista Estudiantes</button></a></span>
                    <span><a href="PaginaAsignar.php"><button   style="background-color: green ; height: 40px; width: 140px; border-radius: 200px;  color: #ffffff; font-weight: bold;">Asignar</button></a></span>

                    <img src="assets/svg.svg" style=" position: absolute; margin-top: 100px; top: 0; right: 0;">

                </div>
                <br><br>
            </div>
            
            
        </div>

    </section>


    <main id="main">

        <!-- ======= Cliens Section ======= -->

        <!-- ======= Pricing Section ======= -->
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">




        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Alfabetiza Ya!</h3>
                        <p>
                            Cra. 48 ##1-125 <br> Medellín, Antioquia<br> Colombia <br><br>
                            <strong>Teléfono:</strong> 301 7768235<br>
                            <strong>Correo:</strong> alfabetizaya@gmail.com<br>
                        </p>
                    </div>




                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestras Redes Sociales </h4>
                        <p style="color: black;">Síguenos en nuestras redes para obtener información sobre todos nuestros anuncios.</p>
                        <div class="icons-wrapper">
                            <a href="https://www.facebook.com/AlfabetizaYa/?ref=page_internal"> <i class="ri-facebook-circle-line icon"></i></a>
                            <a href="https://www.instagram.com/alfabetizaya/"> <i class="ri-instagram-line icon" style="color: #E4405F;"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Alfabetiza Ya!</span></strong>. Reservados todos los derechos
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">Alfabetiza Ya!</a>
            </div>
        </div>



        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </footer>
</body>

</html>