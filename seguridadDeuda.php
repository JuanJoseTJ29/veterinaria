<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>

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


<!-- LA VERSION LOGUEADO-->

<header class="header">
    
        <a href="index.php">
            <img class="header__logo" src=https://is4-ssl.mzstatic.com/image/thumb/Purple118/v4/4b/fb/49/4bfb49be-af51-cc43-c0fc-b775e88fd3a2/source/256x256bb.jpg alt="Logotipo">
        </a>
        <br></br>
        <h1 class="titulo">Veterinaria PocasPulgas</h1>
       
    </header>
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            
            <a href="index.php">Inicio</a>
            <a href="FormConsultarPerro.php">Consulta tu mascota </a>
            <a href="FormconsultarDiagnostico.php">Consultar diagnostico </a>
            <a href="logout.php">Cerrar Sesión</a>
        

        </nav>
    </div>


    <section class="imagenn2">
        <div class="contenido-imagenn">
            <h2>Tus Deudas </h2>

            <a class="boton" href="RegistrarPerro.php">Registrar</a>
        </div>

    </section>



<form class="formulario" action="C_deuda.php" method="GET">
<h4 style="color: red;">DEUDA</h4>
<img  src= "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsNykTHxiKpynL2T_7MJQqdlgKqV8tsNIPv0v8U-MFXl8Glpu7HEOifLUPkVA4LoyKVro&usqp=CAU" alt="perroPolicia"/>
<label>Ingresa el codigo de tu perro para visualizar deuda</label>
<p><Input Type = Text name = "cod_perro" ></p>
<Input  class="boton" Type = Submit value = "Enviar">
</form>

<footer class="footer">

    <p>Todos los derecehos reservados. Registro Canino 2022</p>

</footer>
</body>

</html> 