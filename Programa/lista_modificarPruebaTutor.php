<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<center>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<?php
	Include("conexion.php");
	$query="SELECT a.*,b.Ref_nombre FROM tutor a,refuerzo b WHERE a.Id_Refuerzo=b.Id_Refuerzo";// el a.* trae todos los datos de
	$result=mysqli_query($link,$query) or die("Error en la consulta de productos. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table class="table table-striped" >
			<tbody>
			<h1 ALIGN=CENTER>FORMULARIO </h1>
            <h2 ALIGN=CENTER>MODIFICAR / ELIMINAR DATOS DE TUTOR </h2>
			<tr>
			    <td>CODIGO</td>
				<td>NOMBRE TUTOR</td>
				<td>APELLIDO TUTOR</td>
				<td>TIPO DOCUMENTO</td>
				<td>DOCUMENTO</td>
				<td>DIRECCION</td>
				<td>TELEFONO</td>
				<td>NIVEL ESCOLAR</td>
				<td>REFUERZO</td>
				<td>OPCIONES</td>
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".
				"<td>".$Rs['Id_Tutor']."</td>".
				"<td>".$Rs['Tut_Nombretutor']."</td>".
				"<td>".$Rs['Tut_Apellidotutor']."</td>".
				"<td>".$Rs['Tut_tipodedocumento']."</td>".
				"<td>".$Rs['Tut_Documento']."</td>".
				"<td>".$Rs['Tut_Direccion']."</td>".
				"<td>".$Rs['Tut_Telefono']."</td>".
				"<td>".$Rs['Tut_nivelescolar_prof']."</td>".
				"<td>".$Rs['Ref_nombre']."</td>".
				"<td><a href=modificarpruebaTutor.php?Codigo=".$Rs['Id_Tutor'].">Actualizar/</a>
				<a href=eliminarPruebaTutor.php?Codigo=".$Rs['Id_Tutor'].">Eliminar</a></td>".
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
</center>	
</html>

					    
						
						
	
