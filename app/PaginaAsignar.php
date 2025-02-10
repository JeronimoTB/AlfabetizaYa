<?php
session_start();
if(isset($_GET["m"]))
{
$m = $_GET["m"];
}else{
    $m = 0;
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
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
                <img src="./assets/img/AlfabetizaYa.png" class="img-fluid animated" alt="" style="height: 70px ; width: 70px; margin-right: 20px;">

                <h1 class="logo mr-auto" style="color: white;">Alfabetiza ya!</h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="admins.php">Sitio </a></li>
                        <li><a href="search.php">Lista Estudiantes</a></li>
                        <!-- <li><a href="#">Actualización horas</a></li> -->
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
                        <p>
                            <?php echo $_SESSION["nomUsuario"] ?>
                        </p>
                    </div>
                    <br>
                    <div class="dropdown-content" style="background-color: white; border-radius:15px;">
                        <a href="http://localhost:8080/CerrarSes.php"><button style="color: white; background-color:rgb(0, 255, 68); width: 100%; height: 30px;">Cerrar Sesión</button></a>
                    </div>

                </div>

            </div>
        </header>
        <!-- End Header -->
        <br>
        <br>
        <!-- end.nav-menu -->
        <!-- Formulario registro de horas -->
        <form method="post" action="AsignacionAdmin.php" class="form-register" id="registro">
            <h2 style="color: #fff;">Formulario Registro</h2>
            <p style="height: 110px; left: 100px;">Ingresa la siguiente información para registrar al estudiante en el servicio social.</p>
            <label class="font-weight-bold"> Lugar de Servicio <span class="text-danger">*</span></label>
            <input class="controls" type="text" name="LugarServicio" id="lugar" placeholder="Ingrese el Lugar de Servicio">

            <label class="font-weight-bold"> Numero de Carnet del Estudiante <span class="text-danger">*</span></label>
            <input class="controls" type="number" name="numeroCarnetEstudiante" id="soli" placeholder="Ingrese el numero de Solicitud">

            <label class="font-weight-bold"> Horas de Servicio <span class="text-danger">*</span></label>
            <input class="controls" type="number" min="0" max="80" maxlength="11" name="horasServicio" id="cedu" placeholder="Ingrese las horas actuales del estudiante">
            <?php
            if($m == 56){
                        echo"<b>Asignaciones realizadas correctamente!</b>";
                    }?>
            <input class="botons" type="submit" value="Registrar">
            <p><a href="search.php">¿Deseas revisar la lista de solicitudes?</a></p>
        </form>
        <br>
        <br>

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