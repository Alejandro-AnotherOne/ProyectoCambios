<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de informacon beneficiario</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA FORMACION INFORMACION ACUDIENTE </h1>
<center>
<table class="table table-striped">
	<tr>
		<td>CODIGO</td>
		<td>nombres</td>
		<td>apellidos</td>
		<td>Tipo de documento</td>
		<td>edad</td>
		<td>telefono</td>
		<td>direccion</td>
		<td>barrio de residencia</td>
		<td>Correo electronico</td>
		<td>Estado socioeconomico</td>
		</tr>

	<?php
		include("conexion.php");
		$query="SELECT 
		acudiente.Id_Acudiente, 
		acudiente.Acu_nombreacudiente, 
		acudiente.Acu_apellidoacudiente, 
		acudiente.Acu_tipodocumento, 
		acudiente.Acu_documento, 
		acudiente.Acu_edad, 
		acudiente.Acu_telefono, 
		acudiente.Acu_direccion, 
		acudiente.Acu_barrio, 
		acudiente.Acu_correoelectronico, 
		estadosocioeconomico.Soc_Beneficiario 
		FROM acudiente
		LEFT JOIN estadosocioeconomico on acudiente.Id_Socioeconomico=estadosocioeconomico.Id_Socioeconomico
		";
			
			
					
    $result=mysqli_query($link,$query)  or die("error en la consulta");			
	//	$result=mysql_query($query,$link) or die("error en la consulta de productos");
	if(mysqli_num_rows($result)>0)	
	//if(mysql_num_rows($result)>0)
		{
		
			while($row=mysqli_fetch_array($result, MYSQLI_NUM))
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

		/*echo " <script>
			function redireccionar()
			{
				var pagina='index.html';
				location.href=pagina
			}
			setTimeout ('redireccionar()', 10000);
		       </script>
		";*/
	?>
</table>
</body>
</html>