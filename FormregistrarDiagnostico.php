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
    <title>REGISTRO CANINO</title>

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
            <a href="FormregistrarDiagnostico.php">Registrar diagnostico</a>
            <a href="FormConsultarPerro.php">Consulta tu mascota </a>
            <a href="FormconsultarDiagnostico.php">Consultar diagnostico </a>
            <a href="logout.php">Cerrar Sesión</a>

            
            


        </nav>
    </div>


    <section class="imagenn5">
        <div class="contenido-imagenn">
            <h2>Mi Mascota </h2>

            <a class="boton" href="FormConsultarPerro.php">Consulta</a>
        </div>

    </section>


<form class="formulario" action="registrar_diagnostico.php" method="POST" enctype="multipart/form-data" >

<label>Ingresar codigo de administrador </label>
<p><Input class="input-text" name = "CodigoAdmi" Type Text></p>
<label>Ingresar dni del perro: </label>
<p><Input class="input-text" name = "Codigo" Type Text></p>
<label>Ingresar sintomas del perro: </label>
<p><Input class="input-text" name = "Sintoma" Type Text></p>
<label>Ingresar diagnostico: </label>
<p><Input class="input-text" name = "Diagnostico" Type Text></p>

<label>Ingresar medicamentos: </label>
<p><Input class="input-text" name = "Medicamento" Type Text></p>

<label>Ingresar Costo de la consulta:</label>
<p><Input class="input-text" name = "Costo" Type Text></p>

<label>Subir Foto de Rayos X</label>
<Input  type = "file" id="Foto" name = "Foto"> <br><br>
<Input class="boton" name= "Registrar" Type = Submit value = "Registrar">
<Input class="boton2" Type = "reset" value = "Cancelar"></p>
</form>

<footer class="footer">

    <p>Todos los derecehos reservados. Registro Canino 2022</p>

</footer>


</body>



</html>

 