<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
<title>Consulta Acudiente</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA INFORMACION DEL ACUDIENTE</h1>
<center>
<table width="1500" border="1">
     <tr>
	 <table class="table-primary">
	 <table class="table-info">
	 
		<td>CODIGO</td>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Tipo de documento</td>
		<td>Edad</td>
		<td>telefono</td>
		<td>Direccion</td>
		<td>Barrio</td>
		<td>Correo  electronico</td>
		<td>Estado socioeconomico</td>
	</tr>
	<?php
		include("conexion.php");
		//$codigo=$_POST['txtcodigo'];
		//return $codigo
		
	
		$query=" SELECT 
		acuediente.Id_Acudiente, 
		acuediente.Acu_nombreacudiente, 
		acuediente.Acu_apellidoacudiente, 
		acuediente.Acu_tipodocumento, 
		acuediente.Acu_documento, 
		acuediente.Acu_edad, 
		acuediente.Acu_telefono, 
		acuediente.Acu_direccion, 
		acuediente.Acu_barrio, 
		acuediente.Acu_correoelectronico, 
		estadosocioeconomico.Soc_Beneficiario 
		FROM acudiente 
		INNER JOIN estadosocioeconomico on acudiente.Id_Socioeconomico=estadosocioeconomico.Id_Socioeconomico	
		order by 1";

		
		$result=mysqli_query($link,$query) or die("ERROR EN LA CONSULTA ");
		
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			
			
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
				
			echo "<tr>";

			echo "<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td>$row[6]</td>
			<td>$row[7]</td>
			<td>$row[8]</td>
			<td>$row[9]</td>
			<td>$row[10]</td>";

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