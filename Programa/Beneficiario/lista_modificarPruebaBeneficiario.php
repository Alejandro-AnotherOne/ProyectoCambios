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
<body>
<hr><img src="modificar.jpg" align="left"> 
    <header style="height: 70px">
	<img src="modificar1.jpg" align="right" width="250"
     height="250"> 
    <header style="height: 70px">
</hr>
<?php
	Include("conexion.php");
	$query="Select a.*, b.rh_descripcion as des_rh, c.Descripcion as des_zap , d.Talla_camisa as tall_cam, e.Talla_pantalon as tall_pan ,f.Dep_NomDepartamento as dep_cuid, g.acu_nombreacudiente as acu_nomacu , h.Inf_Enfasisacademico as inf_infaca, i.Eps_nombre as Eps_nom,j.Col_Nombre as Col_Nom from beneficiario a, rh b, zapatos c ,camisa d ,pantalon e ,departamento f,acudiente g ,informacion_academica h,eps i ,colegio j where a.id_rh=b.id_rh and a.id_zapatos=c.id_zapatos and a.Id_camisa=d.Id_camisa and a.Id_Pantalon=e.Id_Pantalon and a.Id_Departamento=f.Id_Departamento and a.Id_Acudiente=g.Id_Acudiente and a.Id_InformacionAcademica =h.Id_InformacionAcademica and a.Id_Eps=i.Id_Eps and a.Id_Colegio=j.Id_Colegio";// el a.* trae todos los datos de
	$result=mysqli_query($link,$query) or die("Error en la consulta de beneficiarios. Error: ".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		?>
		<table class="table table-striped" >
			<tbody>
			<em><h1 ALIGN=CENTER>Formulario </h1>
            <h2 ALIGN=CENTER>MODIFICAR / ELIMINAR DATOS DE BENEFICIARIO </h2></em>
			<tr>
			<table class="table table-striped">
				
	<tr>
	<em><tr class="table-active">Listado a modificar.</tr></em>
	<BR>
	<BR>
	<td class="table-info">CODIGO</td>
	<td class="table-info">NOMBRE</td>
	<td class="table-info">codigo</td>
	<td class="table-info">APELLIDOS</td>
	<td class="table-info">FECHA NACIMIENTO</td>
	<td class="table-info">EDAD</td>
	<td class="table-info">GENERO</td>
	<td class="table-info">TELEFONO</td>
	<td class="table-info">DIRECCION</td>
	<td class="table-info">BARRIO</td>
	<td class="table-info">DISCAPACIDAD</td>
	<td class="table-info">ALERGIAS</td>
	<td class="table-info">NACIONALIDAD</td>
	<td class="table-info">TALLA ZAPATOS</td>
	<td class="table-info">TALLA CAMISA</td>
	<td class="table-info">TALLA PANTALON</td>
	<td class="table-info">DEPARTAMENTO</td>
	<td class="table-info">ACUDIENTE</td>
	<td class="table-info">INFORMACION ACADEMICA</td>
	<td class="table-info">EPS</td>
	<td class="table-info">COLEGIO</td>
	<td class="table-info">OPCIONES</td>

			   
		
			</tr>
			<?php	
			while($Rs=mysqli_fetch_array($result))
			{
				echo "<tr>".

				"<td>".$Rs['Id_Beneficiario']."</td>".
				"<td>".$Rs['Ben_Nombres']."</td>".
				"<td>".$Rs['Ben_Apellidos']."</td>".
				"<td>".$Rs['Ben_FechaNacimiento']."</td>".
				"<td>".$Rs['Ben_Edad']."</td>".
				"<td>".$Rs['des_rh']."</td>".
				"<td>".$Rs['Ben_Telefono']."</td>".
				"<td>".$Rs['Bene_direccion']."</td>".
				"<td>".$Rs['Ben_Barrio']."</td>".
				"<td>".$Rs['Ben_Discapacidad']."</td>".
				"<td>".$Rs['Ben_Alergias']."</td>".
				"<td>".$Rs['Ben_Desplazado']."</td>".
				"<td>".$Rs['Ben_Nacionalidad']."</td>". 
				"<td>".$Rs['des_zap']."</td>".
				"<td>".$Rs['tall_cam']."</td>".
				"<td>".$Rs['tall_pan']."</td>".
				"<td>".$Rs['dep_cuid']."</td>".
				"<td>".$Rs['acu_nomacu']."</td>".
				"<td>".$Rs['inf_infaca']."</td>".
				"<td>".$Rs['Eps_nom']."</td>".
				"<td>".$Rs['Col_Nom']."</td>".
				"<td><a href=modificarpruebaBeneficiario.php?Codigo=".$Rs['Id_Beneficiario'].">Actualizar/</a>
				<a href=eliminarPruebaBeneficiario.php?codigo=".$Rs['Id_Beneficiario'].">Eliminar</a></td>".
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

					    
						
						
	
