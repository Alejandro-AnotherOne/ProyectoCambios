<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$id_Socieconomico=$_POST['Id_Socioeconomico'];
$Soc_Beneficiario=$_POST['Soc_Beneficiario'];
$ayuda=$_POST['cmbayuda'];

//echo "la ayuda ES " , var_dump($ayuda);

include("conexion.php");

$query = "INSERT INTO estadosocioeconomico(Id_Socioeconomico, Soc_Beneficiario, Id_Ayuda)
VALUES ('$id_Socieconomico','$Soc_Beneficiario', '$id_ayuda')";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>