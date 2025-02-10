<?php
require "conn.php";
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
                    <li><a href="admins.php">Sitio </a></li>
                    <li><a href="PaginaAsignar.php">Asignar </a></li>
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

    <!-- ======= Header ======= -->


    <br>
    <br>
    <br>
    <br>
    <!-- ======= Hero Section ======= -->

    <section id="search">
        <div>
            <a href="admins.php"><button style="color: white; margin-left:50px; background-color: green; width: 100px; height: 40px; border-radius: 25px; margin-top: 40px;">  Volver</button></a>
        </div>

        <br>
        <br>
        <br>
        <div class="container3" style="height: 80%; margin-left: 120px;">
            <h1 style="color: white">Información del estudiante:</h1>
            <table border="0" style=" border-color: green; border: green 9px solid; border-radius: 25px;">

                <tr  style = "border: green 9px solid;">
                    <td style = "border: green 9px solid; align: center">Numero de Carnet</td>
                    <td align = center style = "border: green 9px solid;">Nombre</td>
                    <td align = center style = "border: green 9px solid;">Apellido</td>
                    <td align = center style = "border: green 9px solid;">Estado</td>
                    <td style = "border: green 9px solid;">Sección</td>
                    <td style = "border: green 9px solid;">Grado</td>
                    <td style = "border: green 9px solid;">Horas de Servicio</td>
                    <td style = "border: green 9px solid;">Fecha de Solicitud</td>
                    <td style = "border: green 9px solid;">Numero de Solicitud</td>
                    <td align = center style = "border: green 9px solid;">Lugar Servicio</td>
                </tr>

                <?php
                
                $sql = "SELECT * FROM SearchEstudiantes;";
                $result = MYSQLI_QUERY($connection, $sql);
                
                while($datos = MYSQLI_FETCH_ASSOC($result)){
                    echo "<tr>
                            <td align = center style = 'border: green 9px solid;'>". $datos['numeroCarnetEstudiante']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['nombreEstudiante']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['apellidoEstudiante']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['estadoEstudiante']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['seccionEstudiante']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['gradoEstudiante']."</td>
                            <td align = center style = 'border: green 9px solid;'>". number_format($datos['horasServicio'])."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['fechaSolicitud']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['numeroSolicitud']."</td>
                            <td align = center style = 'border: green 9px solid;'>". $datos['lugarServicio']."</td>
                        </tr>";
                }
                ?>



            </table>
        </div>

    </section>


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