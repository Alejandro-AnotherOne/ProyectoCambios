<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST['txtcodigo'];
$Acu_nombreacudiente=$_POST["txtAcu_nombreacudiente"];
$Acu_apellidoacudiente=$_POST["txtAcu_apellidoacudiente"];
$Acu_tipodocumento=$_POST["txtAcu_tipodocumento"];
$Acu_edad=$_POST["txtAcu_edad"];
$Acu_genero=$_POST["txtAcu_genero"];
$Acu_telefono=$_POST["txtAcu_telefono"];
$Acu_direccion=$_POST["txtAcu_direccion"];
$Acu_barrio=$_POST["txtAcu_barrio"];
$EstadoSocioeconomico=$_POST["cmbEstadoSocioeconomico"];


include("conexion.php");

$query = "INSERT INTO acudiente(Id_Acudiente,Acu_nombreacudiente,Acu_apellidoacudiente,Acu_tipodocumento,Acu_edad,Acu_genero,Acu_telefono,Acu_direccion, Acu_barrio,Id_Socioeconomico) 
VALUES ('$codigo','$Acu_nombreacudiente','$Acu_apellidoacudiente','$Acu_tipodocumento','$Acu_edad','$Acu_genero','$Acu_telefono','$Acu_direccion','$Acu_barrio','$EstadoSocioeconomico')";



$cadena = mysqli_query($link,$query) or die ("Error en la insercion de datos" . mysqli_error($link)) ;


echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>
