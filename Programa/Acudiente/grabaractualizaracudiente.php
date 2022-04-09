<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
   include("conexion.php");
   $accion=$_POST['Accion'];
 //   $Codigop=$_GET['codigo'];
	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE acudiente
					SET Acu_nombreacudiente='".$_POST['txtAcu_nombreacudiente']."',
						Acu_apellidoacudiente='".$_POST['txAcu_apellidoacudiente']."',
						Acu_edad='".$_POST['txtAcu_edad']."',
						Acu_telefono='".$_POST['Acu_telefono']."',
						Acu_direccion='".$_POST['txtAcu_direccion']."',
						Acu_barrio='".$_POST['txtAcu_barrio']."',
						Acu_correoelectronico='".$_POST['txtAcu_correoelectronico']."',
						Id_Socioeconomico='".$_POST['cmbId_Socioeconomico']."'
						WHERE Id_Acudiente = '".$_POST['txtcodigo']."'";
         
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			//pruebelo
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion"; aca seria lo mismo ? cual es? lapantall

			$query="DELETE 
					FROM acudiente
					WHERE Id_Acudiente ='".$_POST['txtcodigo']."'";

			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='lista_modificaracudiente.php';
					</script>";
		}
	}
?>