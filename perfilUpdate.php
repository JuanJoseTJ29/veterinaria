<?php


$connection = mysqli_connect("localhost", "root","", "veterinaria_db");
if (!$connection) {
    die("Error de conexion: " . mysqli_connect_error());
    }

$id=$_POST['id'];
$nombrev=$_POST['nombrev'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$username=$_POST['username'];
$email=$_POST['email'];


$sql="UPDATE usuarios SET  nombrev='$nombrev', apellido='$apellido', telefono='$telefono',  username='$username', email='$email' WHERE id='$id'";
$query=mysqli_query($connection,$sql);

    if($query){
        Header("Location: Formseguridadperfil.php");
    }
?>