<?php 
include "E:/Xampp/htdocs/xampp/PruebaMillenium/Conexion/Conexion.php";

$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];

$sql="INSERT INTO usermillenium (Nombres, Apellidos) VALUES ('$Nombres','$Apellidos')"
echo mysqli_query($conexion,$sql);

?>