<?php
session_start();
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
            <img src="./assets/img/AlfabetizaYa.png" class="img-fluid animated" alt="" style="height: 70px ; width: 100px; margin-right: 20px;">

            <h1 class="logo mr-auto" style="color: white;">Alfabetiza ya!</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#sites">Sitios </a></li>
                    <li><a href="#contact">Contáctenos</a></li>
                    <li><a href="SoliServicio.php" class="get-started-btn scrollto" style="background-color:#F1C40F ; margin-right: 50px; border: none;">Postúlate!</a></li>
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
                        <p style="font-size: 20px; color: #000; margin-left: 10px;">En este momento llevas,</p>
                        <p style="font-size: 20px; color: #000; font-weight: bold; margin-left: 50px;"><?php echo(number_format($_SESSION["horasUsuario"])." horas!") ?></p>
                        <a href="http://localhost:8080/CerrarSes.php"><button style="color: white; background-color:rgb(0, 255, 68); width: 100%; height: 30px;">Cerrar Sesión</button></a>
                    </div>

            </div>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Header ======= -->



    <!-- ======= Hero Section ======= -->

    <section id="sites">
        <div class="body" style="align-content: right;">
            <div>
                <h1 style="color: white; font-family: Jost, sans-serif; font-weight: 750;">BIENVENIDO</h1>
                <br>
                <h3 style="font-family: Jost, sans-serif; color:white; font-size: 35px;">Aquí podrás ver el⠀<br> lugar de tu interés&#128516;⠀⠀⠀
                </h3>
            </div>
            <div class="options">
                <div class="option active" style="--optionBackground:url(https://cloudfront-us-east-1.images.arcpublishing.com/semana/TAZBWUCBOZHUPI36TPGKWSFKKI.jpg); ">
                    <div class="shadow"></div>
                    <div class="label">
                        <div class="icon" style="height: 40px; width: 1000px;">
                            <i class="fas fa-solid fa-landmark" style="height: 50px; width: 200px;"></i>
                        </div>
                        <div class="info">
                            <div class="main">Museo De Arte Moderno De Medellin</div>
                            <div class="sub">El Mejor Lugar De Arte De La Ciudad!</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground:url(https://bibliotecasmedellin.gov.co/wp-content/uploads/2021/05/P1460649.jpg);">
                    <div class="shadow"></div>
                    <div class="label">
                        <div class="icon" style="height: 40px; width: 1000px;">
                            <i class="fas fa-solid fa-book"></i>
                        </div>
                        <div class="info">
                            <div class="main">Biblioteca</div>
                            <div class="sub">Mejor lugar para lecturas!</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground:url(https://faros.hsjdbcn.org/sites/default/files/styles/shareimg/public/comedor-escolar.jpg?itok=7ZWo8ddj);">
                    <div class="shadow"></div>
                    <div class="label">
                        <div class="icon" style="height: 40px; width: 1000px;">
                        <i class="fas fa-solid fa-utensils"></i>
                        </div>
                        <div class="info">
                            <div class="main">Restaurante Escolar</div>
                            <div class="sub">Vigila y administra el orden!</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground:url(https://elapuron.com/media/2019/10/post/141019-Taller-iPads-Cascos-y-Bicis-CEIP-Gabriel-Duque-1.jpg);">
                    <div class="shadow"></div>
                    <div class="label">
                        <div class="icon" style="height: 40px; width: 1000px;">
                        <i class="fas fa-regular fa-newspaper"></i>
                        </div>
                        <div class="info">
                            <div class="main">Talleres Educativos</div>
                            <div class="sub">El mejor lugar de aprendizaje interactivo !</div>
                        </div>
                    </div>
                </div>
                <div class="option" style="--optionBackground:url(https://staticprd.minuto30.com/wp-content/uploads/2019/01/inem-jose-felix-de-restrepo.jpg);">
                    <div class="shadow"></div>
                    <div class="label">
                        <div class="icon" style="height: 40px; width: 1000px;">
                        <i class="fas fa-sharp fa-solid fa-bell-school"></i>
                        </div>
                        <div class="info">
                            <div class="main">Bienestar</div>
                            <div class="sub">Ayuda y Administra la informacion Estudiantil!</div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="assets/js/script.js"></script>

        </div>
    </section>


    <main id="main">

        <!-- ======= Cliens Section ======= -->

        <!-- ======= Pricing Section ======= -->
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="background-color: white;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contáctenos</h2>
                    <p>Si tiene alguna duda o inquietud por favor dejenosla saber a través de los medios de contacto que disponemos, visualicelos a continuación:</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Lugar:</h4>
                                <p>Cra. 48 ##1-125, Medellín, Antioquia</p>
                            </div>

                            <div class="email" style="background-color:white;">
                                <i class="icofont-envelope"></i>
                                <h4>Correo:</h4>
                                <p>alfabetizaya@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>301 7768235</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.432603373629!2d-75.57775569794609!3d6.206528762849805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46827f7a881345%3A0xdf94c4d13c76ebb!2sInstituci%C3%B3n%20Educativa%20Inem%20Jos%C3%A9%20F%C3%A9lix%20de%20Restrepo!5e0!3m2!1ses-419!2sco!4v1633048247912!5m2!1ses-419!2sco"
                                width="380" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                    </div>

                    
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <div role="form" class="php-email-form">
                            <div class="form-row">
                                <p><h2 style="margin-left: 70px;">Si tienes alguna duda y deseas contactarnos, haz click aquí!<br><br></h2></p>
                                <img style="height: 300%; width: 100%;" class="profile" src="assets/images/gatitoblack.svg"><br><br>
                                <div style="text-align: right;width:1000px;height:10px" class="text-center"><a href="https://forms.gle/5uxsdrSbhyRcQorJ9"><button type="submit">Enviar Mensaje</button></a></div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </section>
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
                            Cra. 48 #1-125 <br> Medellín, Antioquia<br> Colombia <br><br>
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