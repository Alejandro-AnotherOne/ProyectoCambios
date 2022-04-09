<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
<title>Consulta de informacon beneficiario</title>
</head>

<body  >
<hr><img src="consulta2.png" ALIGN=LEFT width="150"
     height="150">
<img src="consulta1.jpg" ALIGN=RIGHT width="150"
     height="150">
</hr>

<h1 ALIGN=CENTER style="color: ##FF0000">CONSULTA FORMACION INFORMACION BENEFICIARIO</h1 >

<center>
<table class="table table-striped">
	<tr>
	<table class="table">
  <thead class="thead-dark">
  <th scope="row">CODIGO</th>
  <th scope="row">NOMBRES</th>
	<th scope="row">APELLIDOS</th>
	<th scope="row">FECHA NACIMIENTO</th>
	<th scope="row">EDAD</th>
	<th scope="row">GENERO</th>
	<th scope="row">RH</th>
	<th scope="row">TELEFONO</th>
	<th scope="row">DIRECCION</th>
	<th scope="row">BARRIO</th>
	<th scope="row">DISCAPACIDAD</th>
	<th scope="row">ALERGIAS</th>
	<th scope="row">DISCAPACIDAD</th>
	<th scope="row">TALLA ZAPATOS</th>
	<th scope="row">TALLA CAMISA</th>
	<th scope="row">TALLA PANTALON</th>
	<th scope="row">DEPARTAMENTO</th>
	<th scope="row">ACUDIENTE</th>
	<th scope="row">INFORMACION ACADEMICA</th>
	<th scope="row">EPS</th>
	<th scope="row">COLEGIO</th>
		</tr>

	<?php
		include("conexion.php");
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
		departamento.Dep_NomDepartamento , 
		acudiente.Acu_nombreacudiente, 
		informacion_academica.Inf_Enfasisacademico , 
		eps.Eps_nombre , 
		colegio.Col_Nombre 
		FROM beneficiario 
		INNER JOIN rh ON beneficiario.id_Rh=rh_Descripcion
		INNER JOIN zapatos ON beneficiario.id_Zapatos=zapatos.id_Zapatos 
		INNER JOIN camisa ON beneficiario.id_camisa=camisa.id_camisa 
		INNER JOIN pantalon ON beneficiario.Id_Pantalon=pantalon.Id_Pantalon 
		INNER JOIN departamento ON beneficiario.Id_Departamento=departamento.Id_Departamento
		INNER JOIN acudiente ON beneficiario.Id_Acudiente=acudiente.Id_Acudiente
		INNER JOIN informacion_academica ON beneficiario.Id_InformacionAcademica=informacion_academica.Id_InformacionAcademica
		INNER JOIN eps ON beneficiario.Id_Eps=eps.Eps_nombre
		INNER JOIN colegio ON beneficiario.Id_Colegio=colegio.Id_Colegio
		order by 1";
			
			
					
    $result=mysqli_query($link,"select * from beneficiario")  or die("error en la consulta");			
	//	$result=mysql_query($query,$link) or die("error en la consulta de productos");
	if(mysqli_num_rows($result)>0)	
	//if(mysql_num_rows($result)>0)
		{
		
			while($row=mysqli_fetch_array($result, MYSQLI_NUM))
			{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
				  <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>
				  <td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td>
				  <td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td>
				  <td>$row[16]</td><td>$row[17]</td><td>$row[18]</td><td>$row[19]</td>>
				  <td>$row[20]</td>"; 
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