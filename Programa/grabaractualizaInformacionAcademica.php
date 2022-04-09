<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
	include("..\conexion.php");
	$accion=$_POST["Accion"];
 //   $Codigop=$_GET['codigo'];
	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE informacion_academica
					SET 
						codigo='".$_POST['txtcodigo']."';
						Inf_informeacademico='".$_POST["txtInf_informeacademico"]."';
						Inf_grado='".$_POST["txtInf_grado"]."'; 
						Inf_colegio='".$_POST["txtInf_colegio"]."'; 
						inf_sede='".$_POST["txtinf_sede"]."'; 
						Inf_nombresede='".$_POST["txtInf_nombresede"]."'; 
						taller='".$_POST["cmbtaller"]."';
						WHERE TALLER.codigo = '".$_POST['txtId_Taller']."'";

			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../index.html';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion";
			$query="DELETE 
					FROM informacion_academica
					WHERE codigo = '".$_POST['txtcodigo']."'";
			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../index.html';
					</script>";
		}
	}
?>