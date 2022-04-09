<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$Id_Taller=$_POST['txtId_Taller'];
$info_Nombre_Taller=$_POST["txtinfo_Nombre_Taller"];
$info_Descripcion_taller=$_POST["txtinfo_Descripcion_taller"]; 
$tutor=$_POST["cmbtutor"];
$inf_Salon=$_POST["txtinf_Salon"];
$inf_Horario=$_POST["txtinf_Horario"];  
echo "El tutor  ES " , var_dump($tutor);


include("conexion.php");

$query = "INSERT INTO `informacion_taller`(`Id_Taller`, `info_Nombre_Taller`, `info_Descripcion_taller`, `Id_Tutor`, `inf_Salon`, `inf_Horario`)
VALUES ('$Id_Taller', '$info_Nombre_Taller' , '$info_Descripcion_taller','$tutor', '$inf_Salon','$inf_Horario')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

