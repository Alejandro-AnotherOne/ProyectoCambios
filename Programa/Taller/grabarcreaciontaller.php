<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$Id_CreaTaller=$_POST['txtId_CreaTaller'];
$Nom_CreaTaller=$_POST["txtNom_CreaTaller"];
$Des_tallernuevo=$_POST["txtDes_tallernuevo"]; 
$tutor=$_POST["cmbtutor"];
echo "El tutor  ES " , var_dump($tutor);


include("conexion.php");

$query = "INSERT INTO `descripcion_taller`(``Id_Desc_taller`, `Des_Nombre_taller`, `Desc_info_talle_intensidad`, `Desc_Info_Taller`)
VALUES ('$Id_Desc_taller', '$Des_Nombre_taller' , '$Desc_info_talle_intensidad','$Desc_Info_Taller', '$Id_Tutor')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

