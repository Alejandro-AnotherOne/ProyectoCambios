<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de Informacion Academica</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA INFORMACIION ACADEMICA</h1>
<center>
<table width="900" border="1">
<tr>
		<td>CODIGO  TALLER</td>
		<td>NOMBRE DEL TALLER </td>
		<td>DESCRIPCION DEL TALLER</td>
		<td>TUTOR</td>
		<td>SALON</td>
		<td>HORARIO</td>
		<td>NOMBRE TUTOR</td>
	
		</tr>
	<?php
		include("conexion.php");
		$codigo=$_POST['txtcodigo'];
		$query="SELECT informacion_taller.Id_Taller, 
					   informacion_taller.info_Nombre_Taller, 
					   informacion_taller.info_Descripcion_taller, 
					   informacion_taller.Id_Tutor, 
					   informacion_taller.inf_Salon, 
					   informacion_taller.inf_Horario, 
				       tutor.Tut_Nombretutor
				FROM informacion_taller 
				INNER JOIN tutor 
				ON informacion_taller.Id_Tutor=tutor.Id_Tutor
				where informacion_taller.Id_Taller=$codigo
				order by 1";

		// $result=mysql_query($query,$link) or die("error en la consulta de productos"); en versiones anteriores
		$result=mysqli_query($link,$query) or die("error en la consulta de productos");
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
				  <td>$row[4]</td><td>$row[5]</td>
				  <td>$row[6]</td>";
			echo "</tr>";
			}
		}
		else
		{
			echo"La consulta no encontro registros asociados";
		}

		//echo " <script>
			//function redireccionar()
			//{
			//	var pagina='../index.html';
				//location.href=pagina
			//}
			//setTimeout ('redireccionar()', 10000);
		     //  </script>
		//";
	?>
</table>
</body>
</html>