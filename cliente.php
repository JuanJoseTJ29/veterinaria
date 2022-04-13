<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 2){
        header('location: login.php');
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

 <!--
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to your App</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO-CLIENTE</title>

    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
<body>

<header class="header">
    
        <a href="index.php">
            <img class="header__logo" src=https://is4-ssl.mzstatic.com/image/thumb/Purple118/v4/4b/fb/49/4bfb49be-af51-cc43-c0fc-b775e88fd3a2/source/256x256bb.jpg alt="Logotipo">
        </a>
        <br></br>
        <h1 class="titulo">Veterinaria PocasPulgas</h1>
       
    </header>
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">

            <a href="RegistrarPerro.php">Registro Consulta</a>
            <a href="FormConsultarPerro.php">Consulta tu mascota </a>
            <a href="FormconsultarDiagnostico.php">Consultar diagnostico </a>
            <a href="Formseguridadperfil.php">Configuración</a>
            <a href="logout.php">Cerrar Sesión</a>
          

        </nav>
    </div>


    <section class="imagenn">
        <div class="contenido-imagenn">
            <h2>BIENVENIDO A LA VETERINARIA POCASPULGAS </h2>
            <p>
            <a class="boton" href="RegistrarPerro.php">Registra</a>
            <a class="boton" href="FormConsultarPerro.php">Consulta</a>
        </p>
        </div>

    </section>  

    <h2>Ya puedes registrar a tu perruno y realizar consultas</h2>
    <img src="https://s03.s3c.es/imag/_v0/770x420/8/f/d/600x400_documento-identidad-nacional-dni-mascotas.jpg" alt="p12">

    <footer class="footer">
        

        <a href="https://www.facebook.com/juan.jose.9469" class="fa fa-facebook fa-2x"></a>
        <a href="https://veterinariarondon.com/" class="fa fa-twitter fa-2x"></a>
        <a href="https://www.instagram.com/juanjotj29/?hl=es" class="fa fa-instagram fa-2x"></a>
        <a href="https://wa.link/e2w1rr" class="fa fa-whatsapp fa-2x"></a>

        

        <p>Todos los derecehos reservados. Registro Canino 2022</p>

    </footer>
  

</body>
    </html>