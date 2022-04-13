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
            <a href="FormconsultarDiagnostico.php">Consultar diagnostico </a>
            <a href="logout.php">Cerrar Sesión</a>
           

        </nav>
    </div>


    <section class="imagenn3">
        <div class="contenido-imagenn">
            <h2>RESULTADOS </h2>

        </div>

    </section>

<?php
//conexion a la Base de datos (Servidor,usuario,password)
$connection = mysqli_connect("localhost", "root","", "veterinaria_db");
if (!$connection) {
die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("veterinaria_db",$link);
//capturando datos
$v2 = $_REQUEST['Nombre'];
//conuslta SQL
$sql = "select * from Perro where Nombre like '".$v2."'";
$result = mysqli_query($connection, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);
echo "<h5>Número de perros encontrados: ".$num_resultados."</p>";
//mostrando informacion de los perros y detalle
echo "<table  style='width:100% ' > ";
echo "<tr>";
    echo "<th>Numero</th>";
    echo "<th>DNI</th>";
    echo "<th>Nombre</th>";
    echo "<th>Raza</th>";
    echo "<th>Genero</th>";
    echo "<th>Nacio en</th>";
    echo "<th>FOTO</th>";
echo "</tr>";
for ($i=0; $i <$num_resultados; $i++) {
$row = mysqli_fetch_array($result); 
echo "<tr>";
echo "<td>" . ($i + 1) . "</td>";
echo " <td>".$row["id"]. "</td>";
echo " <td>".$row["Nombre"]. "</td>";
echo " <td>".$row["Raza"]. "</td>";
echo " <td>".$row["Genero"]. "</td>";
echo " <td>".$row["FechaNacimiento"]. "</td>";
echo"<td>".'<img src="'.$row['Foto'].'" width="100" heigth="100">'. "</td>";
echo "</tr>"; 
}
echo "</table>";
?>
</h5>

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