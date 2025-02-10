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

            <h1 class="logo mr-auto"><a href="princi.php">Alfabetiza ya!</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            
            <div class="dropdown" style="display:inline-block ; position: relative; margin-top: 20px;">
                    <div class="profile">
                        <img class="profile" src="assets/img/portfolio/profile.svg">
                        <p><?php if (!isset($_SESSION["nomUsuario"])){
                            header('Location: ./index.html');
                        }
                        else {
                            echo "Bienvenid@ <br> " . $_SESSION["nomUsuario"];
                        } ?></p>   
                    </div>
                    <br>
                    <div class="dropdown-content" style="background-color: white; border-radius:15px;">                        
                        <p style="font-size: 20px; color: #000; margin-left: 10px;">En este momento llevas,</p>
                        <p style="font-size: 20px; color: #000; font-weight: bold; margin-left: 50px;"><?php echo(number_format($_SESSION["horasUsuario"])." horas!") ?></p>
                        <a href="./CerrarSes.php"><button style="color: white; background-color:rgb(0, 255, 68); width: 100%; height: 30px;">Cerrar Sesión</button></a>
                    </div>

            </div>

        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    

    <section class="contact-box">
        <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 d-flex">
                <img src="assets/images/social.svg" width="80%" height="70%">
                <div class="position-absolute testiomonial p-4">
                    <h3 class="font-weight-bold text-light py-4">Los siguientes datos son solo para uso de la institución.</h3>
                    <p class="lead text-light">Mantenga sus datos al día para mejor servicio.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3" style="color: white">Ingrese los siguientes datos para así ser postulado en el servicio social.</h1>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <!-- ======= Formulario Solicitud ======= -->
                    
                    <form method="post" action="SolicitudServicio.php">
                        <div class="form-row mb-3">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Grado <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" min="10" max="11" placeholder="Tu Grado" name="gradoEstudiante" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Sección <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" min="1" max="30" placeholder="Tu Sección" name="seccionEstudiante" required/>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold"> Numero del Carnet <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="Tu Numero del Carnet" name="numeroCarnetEstudiante" required/>
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <p>
                            <?php                             
                            if($m == 50){
                                echo"<b>Solicitud realizada exitosamente!</b>";
                            }
                            elseif($m == 93){
                                echo"<b>Error: Solo puedes hacer una solicitud!</b>";
                            }
                            elseif($m == 76){
                                echo"<b>Error: Usted ya ha terminado su servicio!</b>";
                            }
                            ?>
                        </p>
                        <button class="btn btn-primary width-100">Completar</button> 
                    </form>
                </div>
            </div>
        </div>
    </section>

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
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">Acerca de nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#services">Servicios</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-6 footer-links" style="color:black">
                        <h4>Nuestras Redes Sociales </h4>
                        <p>Síguenos en nuestras redes para obtener información sobre todos nuestros anuncios.</p>
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
    </footer>
</body>