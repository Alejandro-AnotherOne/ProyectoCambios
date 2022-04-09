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
		<td>CODIGO</td>
		<td>INFORME ACADEMICO</td>
		<td>GRADO</td>
		<td>COLEGIO</td>
		<td>SEDE</td>
		<td>NOMBRE SEDE</td>
		<td>TALLER</td>
		</tr>
	<?php
		include("conexion.php");
		$codigo=$_POST['txtcodigo'];
		$query="SELECT 
				informacion_academica.Id_InformacionAcademica, 
				informacion_academica.Inf_informeacademico,
				informacion_academica.Inf_grado, 
				informacion_academica.Inf_colegio, 
				informacion_academica.inf_sede, 
				informacion_academica.Inf_nombresede, 
				taller.Tal_Nombretaller 			
				FROM informacion_academica
				INNER JOIN taller ON
				informacion_academica.id_taller=taller.id_taller
				where informacion_academica.Id_InformacionAcademica=$codigo
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