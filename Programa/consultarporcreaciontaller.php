<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script -->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta de tutor</title>
</head>
<body>
<h1 ALIGN=CENTER>CONSULTA CREACION TALLERES NUEVOS</h1>
<center>
<table width="1200" border="1">
<tr>
		<td>CODIGO</td>
		<td>NOMBRE DEL TALLER</td>
		<td>DESCRIPCION DEL CONTENIDO DEL TALLER</td>
		<td>NOMBRES TUTOR</td>
		<td>APELLIDOS TUTOR</td>
		
		</tr>
	<?php
		include("conexion.php");
		$codigo=$_POST['txtId_CreaTaller'];
		$query="SELECT 	creaciontaller.info_Nombre_Taller, 
						creaciontaller.info_Nombre_Taller,
						creaciontaller.info_Descripcion_taller, 
						tutor.tutor.Id_turot
						
                   FROM creaciontaller
				   order by 1";

$result=mysqli_query($link,$query)  or die("error en la consulta");			
//	$result=mysql_query($query,$link) or die("error en la consulta de productos");
if(mysqli_num_rows($result)>0)	
//if(mysql_num_rows($result)>0)
	{		 
	  while($row=mysqli_fetch_array($result,MYSQLI_NUM))
	{
		 echo "<tr>";
		 echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
			   <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>";
		 echo "</tr>";
	}
}
		 
	//echo " <script>
	 //function redireccionar()
		//{
		//var pagina='index.html';
		//location.href=pagina
		//}
		//etTimeout ('redireccionar()', 10000);
		//</script>
		//";
	
 ?>
</table>
</body>
</html>		