<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST['txtId_Tutor'];
$Tut_Nombretutor=$_POST["txtTut_Nombretutor"];
$Tut_Apellidotutor=$_POST["txtTut_Apellidotutor"]; 
$Tut_tipodedocumento=$_POST["txtTut_tipodedocumento"]; 
$Tut_Direccino=$_POST["txtTut_Direccion"]; 
$Tut_Telefono=$_POST["txtTut_Telefono"]; 
$Tut_nivelescolar_prof=$_POST["txtTut_nivelescolar_prof"]; 





include("conexion.php");
$query = "INSERT INTO tutor (`Id_Tutor`, `Tut_Nombretutor`, `Tut_Apellidotutor`, `Tut_tipodedocumento`, `Tut_Direccion`, `Tut_Telefono`, `Tut_nivelescolar_prof`)
 VALUES ($codigo,'$Tut_Nombretutor', '$Tut_Apellidotutor' , '$Tut_tipodedocumento', '$Tut_Direccino',$Tut_Telefono, '$Tut_nivelescolar_prof')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

