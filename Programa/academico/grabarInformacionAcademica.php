<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST['txtcodigo'];
$Inf_informeacademico=$_POST["txtInf_Enfasisacademico"];
$Inf_grado=$_POST["txtInf_grado"]; 
$Inf_colegio=$_POST["txtInf_colegio"]; 
$inf_sede=$_POST["txtinf_sede"]; 
$Inf_nombresede=$_POST["txtInf_nombresede"]; 
$Id_Desc_Info_Taller=$_POST["cmbdesctaller"];

//echo "el taller ES " , var_dump($taller);


include("conexion.php");

$query = "INSERT INTO `informacion_academica`(`Id_InformacionAcademica`, `Inf_Enfasisacademico`, `Inf_grado`, `Inf_colegio`, `inf_sede`, `Inf_nombresede`, `Id_Desc_Info_Taller`) 
values($codigo,'$Inf_informeacademico', '$Inf_grado' , '$Inf_colegio', '$inf_sede' , '$Inf_nombresede',$Id_Desc_Info_Taller )";

$cadena=mysqli_query($link,$query) or die ("Error en la insercion de datos");

echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>


