<?php
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
            header('location: cliente.php');
            break;

            default:
        }
    }

    ?>
 
<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['nombrev']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (nombrev,apellido,telefono,username,email, password) VALUES (:nombrev, :apellido, :telefono, :username, :email, :password)";
    $db = new Database();
    $stmt = $db->connect()->prepare($sql);
    $stmt->bindParam(':nombrev', $_POST['nombrev']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
  
    if ($stmt->execute()) {
      

      $message = 'Cuenta creada con éxito';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <!--
    <meta charset="utf-8">
    <title>Signup</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
-->

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>

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

            <a href="index.php">Inicio</a>
            <a href="signup.php">Registrarte</a>
            <a href="login.php">Iniciar sesión</a>
          

        </nav>
    </div>


    <section class="imagenn">
        <div class="contenido-imagenn">
            <h2>¿Ya tienes una cuenta?</h2>
            <h3 style="color: white;">Crea una cuenta y registra a tu mascota</h3>
            <p>
            
            <a class="boton" href="login.php">Iniciar Sesión</a>
        </p>
        </div>

    </section>



  <?php if(!empty($message)): ?>
      <p><h3 style="color:green; font-size:3.8rem;"> <?= $message ?></h3></p>
      <img  src= "https://us.123rf.com/450wm/ankomando/ankomando1610/ankomando161000184/66674058-dogs-ok-sign.jpg?ver=6" alt="perro"/>
    <?php endif; ?>

  <h1>Registro</h1>
  

  <form class="formulario" action="signup.php" method="POST">
      <label>Ingresa tu Nombre:</label>
      <p><input class="input-text" name="nombrev" type="text" placeholder="Ingresa tu usuario"></p>
      <label>Ingresa tu Apellido:</label>
      <p><input class="input-text" name="apellido" type="text" placeholder="Ingresa tu usuario"></p>
      <label>Ingresa tu telefono:</label>
      <p><input class="input-text" name="telefono" type="text" placeholder="Ingresa tu usuario"></p>
      <label>Ingresa tu usuario:</label>
      <p><input class="input-text" name="username" type="text" placeholder="Ingresa tu usuario"></p>
      <label>Ingresa tu email:</label>
      <p><input class="input-text" name="email" type="email" placeholder="Ingresa tu email"></p>
      <label>Ingresa tu contraseña:</label>
      <p><input class="input-text"  name="password" id="password" pattern= "([A-Za-z]+[0-9]{0,2}[#$%&/]{0,2}){4,}"  title="Usa mas de 8 caracteres" type="password" placeholder="Enter your Password"></p>
      <input class="boton" type="submit" value="Registrar">

    </form>

    <footer class="footer">                         

<p>Todos los derecehos reservados. Registro Canino 2022</p>

</footer>

  </body>
</html>