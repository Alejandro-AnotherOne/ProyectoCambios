<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta AYUDAS</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA DE AYUDAS A BENEFICIARIOS</h1>
<center>
<table width="1200" border="1">
     <tr>
		<<td>CODIGO</td>
                <td>nombres</td>
                <td>apellidos</td>
                <td>fecha nacimiento</td>
                <td>edad</td>
                <td>Genero</td>
                <td>RH</td>
                <td>telefono</td>
                <td>direccion</td>
                <td>barrio</td>
                <td>discapacidad</td>
                <td>alergias</td>
                <td>discapacidad</td>
				<td>Nacionalida</td>
                <td>tallas zapatos</td>
                <td>talla camisas</td>
                <td>talla pantalon</td>
                <td>departamento</td>
                <td>acudiente</td>
                <td>informacion academica</td>
                <td>eps</td>
                <td>colegio</td>
				
	</tr>
	<?php
		include("conexion.php");
		$codigo=$_POST['Codigo'];
	
		$query="SELECT   
		beneficiario.Id_Beneficiario, 
		beneficiario.Ben_Nombres, 
		beneficiario.Ben_Apellidos, 
		beneficiario.Ben_Edad, 
		beneficiario.Ben_Genero,
		beneficiario.Ben_Telefono,
		acudiente.Id_Acudiente,
		acudiente.Acu_nombreacudiente,
		ayuda.Id_Entrega,
		entrega_ayuda.Ayuda_Nombre,
		entrega_ayuda.Fecha_entrega
		FROM `entrega_ayuda`
		INNER JOIN beneficiario ON entrega_ayuda.Id_Beneficiario=beneficiario.Id_Beneficiario
		INNER JOIN acudiente ON beneficiario.Id_Acudiente=acudiente.Id_Acudiente
		INNER JOIN ayuda ON ayuda.Id_Ayuda=entrega_ayuda.Id_Ayuda;
				where beneficiario.Id_Beneficiario=$codigo
				order by 1";

		$result=mysqli_query($link,$query) or die("ERROR EN LA CONSULTAs"); 
		//$result=mysqli_query($link,$query) or die("ERROR EN LA CONSULTA ");
		
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
				  <td>$row[12]</td><td>$row[13]";
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