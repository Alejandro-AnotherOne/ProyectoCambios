<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de tutor</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA TUTOR</h1>
<center>
<table width="1200" border="1">
<tr>
		<td>CODIGO</td>
		<td>NOMBRE TUTOR</td>
		<td>APELLIDO TUTOR</td>
		<td>TIPO DOCUMENTO</td>
		<td>DIRECCION</td>
		<td>TELEFONO</td>
		<td>NIVEL ESCOLAR</td>
		</tr>
	<?php
		include("conexion.php");
		$codigo=$_POST['txtId_Tutor'];
		$query="SELECT  tutor.Id_Tutor, 
						tutor.Tut_Nombretutor,
						tutor.Tut_Apellidotutor, 
						tutor.Tut_tipodedocumento, 
						tutor.Tut_Direccion, 
						tutor.Tut_Telefono, 
						tutor.Tut_nivelescolar_prof, 
                   FROM tutor
				   ";

$result=mysqli_query($link,$query)  or die("error en la consulta");			
//	$result=mysql_query($query,$link) or die("error en la consulta de productos");
if(mysqli_num_rows($result)>0)	
//if(mysql_num_rows($result)>0)
	{		 
	  while($row=mysqli_fetch_array($result,MYSQLI_NUM ))
	{
		 echo "<tr>";
		 echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
			   <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>";
		 echo "</tr>";
	}
}
		 
	//echo " <script>
	 //function redireccionar()
		//{
		//var pagina='index.html';
		//location.href=pagina
		//}
		//etTimeout ('redireccionar()', 10000);
		//</script>
		//";
	
 ?>
</table>
</body>
</html>		