<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADOS</title>

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
            <a href="RegistrarPerro.php">Registro Consulta</a>
            <a href="FormConsultarPerro.php">Consulta tu mascota </a>
            <a href="FormconsultarDiagnostico.php">Consulta tu diagnostico </a>
          
            <a href="logout.php">Cerrar Sesión</a>
           

        </nav>
    </div>


    <section class="imagenn3">
        <div class="contenido-imagenn">
            <h2>MI PERFIL</h2>

        </div>

    </section>
<form class="formulario" >

<img  src= "https://i.pinimg.com/236x/21/ab/92/21ab92d1578f53ec9ec4409c74228aa1.jpg" alt="perroPerfil"/>
<?php
//conexion a la Base de datos (Servidor,usuario,password)
$connection = mysqli_connect("localhost", "root","", "veterinaria_db");
if (!$connection) {
die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("veterinaria_db",$link);
//capturando datos
$v2 = $_REQUEST['email'];
//conuslta SQL
$sql = "select * from usuarios where email like '".$v2."'";
$result = mysqli_query($connection, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);
echo "<h1 style=color:blue>MIS DATOS PERSONALES: </p>";
//mostrando informacion de los perros y detalle
for ($i=0; $i <$num_resultados; $i++) {
$row = mysqli_fetch_array($result); 

echo " <h1 style=font-size: 1.8rem>Codigo de Usuario : ".$row["id"]."</h1>";
echo " <h1>Nombre : ".$row["nombrev"]."</h1>";
echo " <h1>Apellido : ".$row["apellido"]."</h1>";
echo " <h1>Telefono : ".$row["telefono"]."</h1>";
echo " <h1>Username : ".$row["username"]."</h1>";
echo " <h1>Email : ".$row["email"]."</h1>";
echo " <h1>Rol : ".$row["rol_id"]."</h1>";
echo " </br>";
echo " </br>";

}

?>

<a class="boton" href="perfilActualizar.php?id=<?php echo $row['id'] ?>" >Editar</a>

<a style="background-color: red;" class="boton" href="seguridadDeuda.php" >Deuda</a>
</h5>
</form>

<footer class="footer">

<p>Todos los derecehos reservados. Registro Canino 2022</p>

</footer>
</body>
</html>