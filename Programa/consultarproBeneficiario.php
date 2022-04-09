<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta Beneficiario</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA INFORMACION DEL BENEFICIARIO</h1>
<center>
<table width="900" border="1">
     <tr>
		<td>CODIGO</td>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Fecha nacimiento</td>
		<td>Edad</td>
		<td>Genero</td>
		<td>RH</td>
		<td>telefono</td>
		<td>Direccion</td>
		<td>Barrio</td>
		<td>Discapacidad</td>
		<td>Alergias</td>
		<td>Discapacidad</td>
		<td>Tallas zapatos</td>
		<td>Talla camisas</td>
		<td>Talla pantalon</td>
		<td>Departamento</td>
		<td>Acudiente</td>
		<td>Informacion academica</td>
		<td>Eps</td>
		<td>Colegio</td>
	</tr>
	<?php
		include("conexion.php");
		$codigo=$_POST['txtcodigo'];
		
	
		$query="SELECT 
				beneficiario.Id_Beneficiario, 
		        beneficiario.Ben_Nombres, 
				beneficiario.Ben_Apellidos, 
				beneficiario.Ben_FechaNacimiento, 
				beneficiario.Ben_Edad, 
				beneficiario.Ben_Genero,
				rh.rh_Descripcion, 
				beneficiario.Ben_Telefono, 
				beneficiario.Bene_direccion, 
				beneficiario.Ben_Barrio, 
				beneficiario.Ben_Discapacidad, 
				beneficiario.Ben_Alergias, 
				beneficiario.Ben_Desplazado, 
				zapatos.Descripcion, 
				camisa.Talla_camisa, 
				pantalon.Talla_pantalon, 
				departamento.Dep_cuidad , 
				acudiente.Acu_nombreacudiente, 
				informacion_academica.Inf_informeacademico , 
				eps.Eps_nombre , 
				colegio.Col_Nombre 
				FROM beneficiario 
				INNER JOIN rh ON beneficiario.id_Rh=rh.id_Rh 
				INNER JOIN zapatos ON beneficiario.id_Zapatos=zapatos.id_Zapatos 
				INNER JOIN camisa ON beneficiario.id_camisa=camisa.id_camisa 
				INNER JOIN pantalon ON beneficiario.Id_Pantalon=pantalon.Id_Pantalon 
				INNER JOIN departamento ON beneficiario.Id_Departamento=departamento.Id_Departamento
				INNER JOIN acudiente ON beneficiario.Id_Acudiente=acudiente.Id_Acudiente
				INNER JOIN informacion_academica ON beneficiario.Id_InformacionAcademica=informacion_academica.Id_InformacionAcademica
				INNER JOIN eps ON beneficiario.Id_Eps=eps.Id_Eps
				INNER JOIN colegio ON beneficiario.Id_Colegio=colegio.Id_Colegio
				where beneficiario.Id_Beneficiario=$codigo
				order by 1";

		// $result=mysql_query($query,$link) or die("error en la consulta de productos"); en versiones anteriores
		$result=mysqli_query($link,$query) or die("ERROR EN LA CONSULTA ");
		echo mysqli_query;
		// if(mysql_num_rows($result)>0)
		if(mysqli_num_rows($result)>0)	
		{
			// while($row=mysql_fetch_array($result))
			while($row=mysqli_fetch_array($result))	
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
				  <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>
				  <td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td>
				  <td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td>
				  <td>$row[16]</td><td>$row[17]</td<td>$row[18]</td><td>$row[19]</td>
				  <td>$row[20]</td>";
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