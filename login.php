<?php
    include_once 'database.php';

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

    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email=$_POST['email'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE username = :username AND email =:email');
        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':email', $_POST['email']);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
     
        if(count($row) > 0 && password_verify($_POST['password'], $row['password'])){
            // validar rol
            $_SESSION['rol'] = $row['rol_id'];

            switch($_SESSION['rol']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2:
                header('location: cliente.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    

?>

<!DOCTYPE html>
<html>
  <head>
  <!--  
  <meta charset="utf-8">
    <title>Login</title>
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
            <a href="login.php">Iniciar Sesión</a>
          

        </nav>
    </div>


    <section class="imagenn">
        <div class="contenido-imagenn">
            <h2>¿Ya tienes una cuenta?</h2>
            <h3 style="color: white;">Crea una cuenta y registra a tu mascota</h3>
            <p>
            
            <a class="boton" href="signup.php">Registrarte</a>
        </p>
        </div>

    </section>


    <h1>Login</h1>
  

    <?php if(!empty($message)): ?>
      <p> <h3 style="color: red; font-size:2.8rem;"> <?= $message ?></h3></p>
    <?php endif; ?>


    
    <form class="formulario" action="login.php" method="POST">


      <label>Ingresar tu usuario:</label>
      <p><input class="input-text"  name="username" type="text" placeholder="Ingresa tu usuario"></p>
      <label>Ingresar tu email:</label>
      <p><input class="input-text"  name="email" type="email" placeholder="Ingresa tu email"></p>
      <label>Ingresar tu contraseña:</label>
      <p><input class="input-text"  name="password" type="password" placeholder="Ingresa tu password"></p>
      <input class="boton" type="submit" value="Iniciar Sesión">
    </form>
    <footer class="footer">

<p>Todos los derecehos reservados. Registro Canino 2022</p>

</footer>

  </body>
</html>





