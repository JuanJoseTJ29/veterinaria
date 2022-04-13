<?php 

$connection = mysqli_connect("localhost", "root","", "veterinaria_db");
if (!$connection) {
    die("Error de conexion: " . mysqli_connect_error());
    }


$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE id='$id'";
$query=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($query);
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
    <title>INICIO</title>

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
        <h2>ACTUALIZANDO PERFIL</h2>
        <h3 style="color: white;">Edita tus datos personales</h3>
        <p>
       
    </p>
    </div>

</section>


                <div class="container mt-5">
                    <form class="formulario" action="perfilUpdate.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <label>Nombre:</label>
                                <input type="text" class="input-text" name="nombrev" placeholder="nombrev" value="<?php echo $row['nombrev']  ?>">
                                <p></p>
                                <label>Apellido</label>
                                <input type="text" class="input-text" name="apellido" placeholder="apellido" value="<?php echo $row['apellido']  ?>">
                                <p></p>
                                <label>Telefono:</label>
                                <input type="text" class="input-text" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <p></p>
                                <label>Username:</label>
                                <input type="text" class="input-text" name="username" placeholder="username" value="<?php echo $row['username']  ?>">
                                <p></p>
                                <label>Email:</label>
                                <input type="text" class="input-text" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                <p></p>
                            <input type="submit" class="boton" value="Actualizar">
                    </form>
                    
                </div>

                <footer class="footer">
        

        <a href="https://www.facebook.com/juan.jose.9469" class="fa fa-facebook fa-2x"></a>
        <a href="https://veterinariarondon.com/" class="fa fa-twitter fa-2x"></a>
        <a href="https://www.instagram.com/juanjotj29/?hl=es" class="fa fa-instagram fa-2x"></a>
        <a href="https://wa.link/e2w1rr" class="fa fa-whatsapp fa-2x"></a>

        <!--https://twitter.com/JuanJosTirado1-->

        <p>Todos los derecehos reservados. Registro Canino 2022</p>

    </footer>
    </body>
</html>