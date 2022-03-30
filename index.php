<?php
    include("reg_db_be.php");
    include("log_db_be.php");
    /*
    session_start();
    
    if (!isset($_SESSION ['usuario'])) {
			
        echo '
        <script>
            alert ("Debes iniciar sesion");
            window.location = "../Nuevo Proyecto/login.php";
        </script>
        ';    
        session_destroy();
        die();        
    }*/
    //session_destroy();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button name="inicio">Entrar</button>
                </form>

                <!--Register-->
                <form method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button name="register">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>