<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>
        <!--Contenedor de todo-->
        <div class="contenedorTodo">

            <div class="cajaTrasera">
                <div class="cajaTrasera-Login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la pagina</p>
                    <button id="btn_iniciarSesion">Iniciar sesión</button>
                </div>
                <div class="cajaTrasera-Register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de login y registro-->
            <div class="contenedorLogin-Register">
                
                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario-Login">  
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasenna">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario-Register">
                    <h2>Registrarse</h2>  
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasenna">
                    <button>Registrarse</button>
                </form>

            </div>
            

        </div>

    </main>

    <script src="assets/js/script.js"></script>
    
</body>
</html> 