<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  
<title>Consulta de Informacion Academica</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA INFORMACIION ACADEMICA</h1>
<center>
<table width="900" border="1">
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">CODIGO  TALLER</th>
<th scope="col">DESCRIPCION DEL TALLER</th>
<th scope="col">NOMBRE DEL TALLER</th>
<th scope="col">FECHA INICIO</th>
<th scope="col">FECHA FINAL</th>
<th scope="col">DIAS DEL TALLER</th>
<th scope="col">NOMBRE TUTOR</th>

	
		</tr>
		
	<?php
		include("conexion.php");
		$codigo=$_POST['txtcodigo'];
		$query="SELECT 			   
					   inicio_taller.Id_Ini_Taller,  
					   inicio_taller.Id_Desc_taller,  
					   inicio_taller.Ini_fecha_inicio,  
					   inicio_taller.Ini_Fecha_fin,  
					   inicio_taller.Ini_Dias_taller,  
					   inicio_taller.Ini_jornada,
					   tutor.Id_Tutor
		
				FROM  inicio_taller 
				INNER JOIN tutor 
				ON  inicio_taller.Id_Tutor=tutor.Id_Tutor
				where  inicio_taller.Id_Ini_Taller=$codigo
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