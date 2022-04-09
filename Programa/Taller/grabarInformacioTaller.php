<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

   $Id_Ini_Taller=$_POST['txtId_Ini_Taller'];
   $Ini_des_taller =$_POST['txtIni_des_taller'];
   $Ini_fecha_inicio=$_POST['txtIni_fecha_inicio'];
   $Ini_Fecha_fin=$_POST['txtIni_Fecha_fin'];
   $Ini_Intensidad=$_POST['txtIni_Intensidad'];
   $Ini_Dias_taller=$_POST['txIni_Dias_taller'];
   $Ini_jornada=$_POST['txtIni_jornada'];
   //$Id_Tutor=$_POST['cmbId_Tutor'];


include("conexion.php");

$query = "INSERT INTO `inicio_taller` (`Id_Ini_Taller`, `Ini_des_taller`, `Ini_fecha_inicio`, `Ini_Fecha_fin`, `Ini_Intensidad`, `Ini_Dias_taller`, `Ini_jornada`, `Id_Tutor`)
VALUES ($Id_Ini_Taller, $Ini_des_taller, $Ini_fecha_inicio, $Ini_Fecha_fin, $Ini_Intensidad, $Ini_Dias_taller, $Ini_jornada, 10)";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>;

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

