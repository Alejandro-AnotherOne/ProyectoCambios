<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->
<?php
	Include("conexion.php");
	$query="SELECT * FROM acudiente WHERE acudiente.Id_Acudiente";// el a.* trae todos los datos de
	$result=mysqli_query($link,$query) or die("Error en la consulta de productos. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table class="table table-striped" >
			<tbody>
			<h1 ALIGN=CENTER>FORMULARIO </h1>
            <h2 ALIGN=CENTER>MODIFICAR / ELIMINAR DATOS DE ACUDIENTE </h2>
			<tr>
			    <td>CODIGO</td>
				<td>NOMBRES</td>
				<td>APELLIDOS </td>
				<td>TIPO DOCUMENTO</td>
				<td>EDAD</td>
				<td>TELEFONO</td>
				<td>DIRECCION</td>
				<td>BARRIO</td>
				<td>CORREO ELECTRONICO</td>
				<td>ESTADO SOCIOECONOMICO</td>

			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
				"<td>".$Rs['Id_Acudiente']."</td>".
				"<td>".$Rs['Acu_nombreacudiente']."</td>".
				"<td>".$Rs['Acu_apellidoacudiente']."</td>".
				"<td>".$Rs['Acu_tipodocumento']."</td>".
				"<td>".$Rs['Acu_edad']."</td>".
				"<td>".$Rs['Acu_telefono']."</td>".
				"<td>".$Rs['Acu_direccion']."</td>".
				"<td>".$Rs['Acu_barrio']."</td>".
				"<td>".$Rs['Acu_correoelectronico']."</td>".
				"<td>".$Rs['Id_Socioeconomico']."</td>".
				"<td><a href=modificarpruebaacudiente.php?Codigo=".$Rs['Id_Acudiente'].">Actualizar/</a>
				<a href=eliminaracudiente.php?Codigo=".$Rs['Id_Acudiente'].">Eliminar</a></td>".
	            "</tr>";
			}
	}
	else
	{
		echo"No hay productos registrados para listar";
	}

	mysqli_close($link);
	?>
	</table>
	<a href="indexAdmi.html">Volver</a>
	
</html>

					    
						
						
	
