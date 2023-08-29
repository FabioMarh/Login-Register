<?php

    session_start();
    //para iniciar una sesión !!importante 

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasenna = $_POST['contrasenna'];
    $contrasenna = hash('sha512', $contrasenna);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasenna='$contrasenna'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo; //Variable de sesión para seguridad de la pagina - Guardar cache de usuario para acceso a url 'bienvenida.php'
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos ingresados");
                window.location = "../index.php"; 
            </script>
        ';
        exit;
    }

?>

