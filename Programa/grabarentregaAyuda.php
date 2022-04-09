<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
  
   
$codigo=$_POST['txtcodigo'];
$id_Beneficiario=$_POST['cmbbeneficiario'];
$Ayuda_Nombre=$_POST['txtAyuda_Nombre'];
$Entrega=$_POST['txtentregaayuda'];
$Fecha_entrega=$_POST['txtFecha_entrega'];

include ("conexion.php");

$query = "INSERT INTO `entrega_ayuda`(`Id_Entrega`, `Id_Beneficiario`, `Ayuda_Nombre`, `Fecha_entrega`) 
VALUES ('$codigo','$Id_Beneficiario','$Ayuda_Nombre','$Fecha_entrega')";


$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

