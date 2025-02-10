<?php
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/estilos.css" />
    <title>Alfabetiza Ya</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form name="forminsesion" method="post" action="ComprobarInicio.php" class="sign-in-form">
                    <h2 class="title">Inicia Sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Numero de Carnet" name="numCarnet" size="30" maxlength="20" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="contra" size="30" maxlength="20" required />
                    </div>
                    <?php
                    if($m == 32){
                        echo"<b>Error: Numero de Carnet o Contraseña Incorrectos</b>";
                    }
                    elseif ($m == 78) {
                        echo"<b>Registro realizado correctamente!</b>";
                    }
                    elseif ($m == 77) {
                        echo"<b>Las contraseñas ingresadas no coinciden, intentelo nuevamente</b>";
                    }
                    elseif ($m == 80) {
                        echo"<b>Este numero de carnet ya pertenece a una cuenta, intentalo nuevamente</b>";
                    }
                    else{
                        echo"";
                    }
                    ?>
                    <p><input type="submit" name="btnEnviar" class="btn solid" value="Ingresar"></p>
                    
                </form>
                <form method="post" action="RegistrarEstudiante.php" class="sign-up-form">
                    <h2 class="title">Registrate</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre" name="nombreEstudiante" size="30" maxlength="20" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Apellido" name="apellidoEstudiante" size="30" maxlength="20" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-solid fa-hashtag"></i>
                        <input type="text" placeholder="Numero de Carnet" name="numCarnet" size="30" maxlength="20" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-solid fa-hashtag"></i>
                        <input type="number" min="15" max="20" placeholder="Edad" name="edadEstudiante"/>
                    </div>                    
                    <div class="input-field">
                        <i class="fas fa-solid fa-hashtag"></i>
                        <input type="text" placeholder="Documento" name="documentoEstudiante" size="30" maxlength="20" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="contraEstudiante" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirme su contraseña" name="contraEstudiante2" required />
                    </div>
                    <input type="submit" class="btn" value="Registrate" />                    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Nuevo Aquí ?</h3>
                    <p>
                        Registrate y alfabetiza ahora!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Registrate</button>
                </div>
                <img src="assets/img/portfolio/in.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Ya haces Parte ?</h3>
                    <p>
                        Inicia Sesión y sigue disfrutando de tu experiencia junto a nosotros
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                Iniciar Sesión 
                    </button>
                </div>
                <img src="assets/img/portfolio/Parceritos.svg" class="image" alt="" width="100px" height="350px" style="left: 700px;">
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>