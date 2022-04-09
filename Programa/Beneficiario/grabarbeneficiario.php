<?php

/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

$codigo=$_POST['txtcodigo'];
$Ben_Nombres=$_POST["txtBen_Nombres"];
$Ben_Apellidos=$_POST["txtBen_Apellidos"];
$Ben_FechaNacimiento=$_POST["txtBen_FechaNacimiento"];
$Ben_Edad=$_POST["txtBen_Edad"];
$Ben_Genero=$_POST["txtBen_Genero"];
$rh=$_POST["cmbrh"];
$Ben_Telefono=$_POST["txtBen_Telefono"];
$Bene_direccion=$_POST["txtBene_direccion"];
$Ben_Barrio=$_POST["txtBen_Barrio"];
$Ben_Discapacidad=$_POST["txtBen_Discapacidad"];
$Ben_Alergias=$_POST["txtBen_Alergias"];
$Ben_Desplazado=$_POST["txtBen_Desplazado"];
$zapatos=$_POST["cmbzapatos"];
$camisa=$_POST["cmbcamisa"];
$pantalon=$_POST["cmbpantalon"];
$departamento=$_POST["cmbdepartamento"];
$acudiente=$_POST["cmbacudiente"];
$informe_academico=$_POST["cmbinformacionacademica"];
$EPS=$_POST["cmbEPS"];
$colegio=$_POST["cmbcolegio"];

//echo "el rh ES " , var_dump($rh);
//echo "la talla de zapatos ES " , var_dump($zapatos);
//echo "la talla de camisas ES " , var_dump($camisa);
//echo "la talla de pantalon ES " , var_dump($pantalon);
//echo "el departamento ES " , var_dump($departamento);
//echo "el acudiente ES " , var_dump($acudiente);
//echo "el informe academico ES " , var_dump($informe_academico);
//echo "el eps ES " , var_dump($EPS);
//echo "el colegio ES " , var_dump($colegio);


include("conexion.php");

$query = "INSERT INTO beneficiario (Id_Beneficiario,Ben_Nombres,Ben_Apellidos,Ben_FechaNacimiento,Ben_Edad,Id_Rh,Ben_Telefono,Bene_direccion,Ben_Barrio,Ben_Discapacidad,Ben_Alergias,Ben_Desplazado,Id_Zapatos,Id_camisa,id_Pantalon,Id_Departamento,Id_Acudiente,Id_InformacionAcademica,Id_Eps,Id_Colegio) 
VALUES 
('$codigo','$Ben_Nombres','$Ben_Apellidos','$Ben_FechaNacimiento','$Ben_Edad','$rh','$Ben_Telefono','$Bene_direccion','$Ben_Barrio','$Ben_Discapacidad','$Ben_Alergias','$Ben_Desplazado','$zapatos','$camisa','$pantalon','$departamento','$acudiente','$informe_academico','$EPS','$colegio')";


$cadena = mysqli_query($link,$query) or die ("Error en la insercion de datos" . mysqli_error($link)) ;


echo "<script>

alert('Los datos se grabaron correctamente');

location.href='../index.html';

</script>";

?>

