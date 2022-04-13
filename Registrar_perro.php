<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 2 ){
        header('location: login.php');
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO EXITOSO</title>

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
            <a href="RegistrarPerro.php">Registro Canino</a>
            <a href="FormConsultarPerro.php">Consulta tu mascota </a>
            <a href="logout.php">Cerrar Sesión</a>
            


        </nav>
    </div>


    <section class="imagenn4">
        <div class="contenido-imagenn">
            <h2>REGISTRO EXITOSO </h2>

        </div>

    </section>

<?php
//conexion a la Base de datos (Servidor,usuario,password)
$connection = mysqli_connect("localhost", "root","", "veterinaria_db");
if (!$connection) {
die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("db",$link);
//capturando datos
$v1 = $_REQUEST['Codigo'];
$v11 = $_REQUEST['CodigoUsuario'];
$v2 = $_REQUEST['Nombre'];
$v3 = $_REQUEST['FechNac'];
$v4 = $_REQUEST['Raza'];
$v5 = $_REQUEST['Genero'];
$Foto = $_FILES['Foto']['name'];
$ruta=$_FILES['Foto']['tmp_name'];
$destino="fotos/".$Foto;
copy($ruta,$destino);

//conuslta SQL
$sql = "INSERT INTO Perro (id, cod_dueño, Nombre, Raza, Genero, FechaNacimiento, Foto) ";
$sql .= "VALUES ('$v1', '$v11', '$v2', '$v4', '$v5', '$v3', '$destino' )";
if (mysqli_query($connection, $sql)) {
echo "<h5>Ok, datos ingresados correctamente </h5>";
echo "<br>";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
//Mensaje de conformidad

?>

<img  src= "https://us.123rf.com/450wm/ankomando/ankomando1610/ankomando161000184/66674058-dogs-ok-sign.jpg?ver=6" alt="perro"/>


<footer class="footer">


<p>Todos los derecehos reservados. Registro Canino 2022</p>

</footer>
</body>
</html>