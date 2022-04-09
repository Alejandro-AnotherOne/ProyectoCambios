<?php
   /*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	   
   include("conexion.php");
   $accion=$_POST["Accion"];
 //   $Codigop=$_GET['codigo'];
	if(isset($accion))
	{
		if($accion=="Update")
		{
			//echo"Enviado desde actualizaci�n";
			$query="UPDATE tutor
					SET Tut_Nombretutor='".$_POST['txtTut_Nombretutor']."',
						Tut_Apellidotutor='".$_POST['txtTut_Apellidotutor']."',
						Tut_tipodedocumento='".$_POST['txtTut_tipodedocumento']."',
						Tut_Documento='".$_POST['txtTut_Documento']."',
						Tut_Direccion='".$_POST['txtTut_Direccion']."',
						Tut_Telefono='".$_POST['txtTut_Telefono']."',
						Tut_nivelescolar_prof='".$_POST['txtTut_nivelescolar_prof']."',
						Id_Refuerzo='".$_POST['cmbrefuerzo']."'
						WHERE Id_Tutor= '".$_POST['txtId_Tutor']."'";
            echo $query;
			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			//pruebelo
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='../Programa/lista_modificarPruebaTutor.php';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion"; aca seria lo mismo ? cual es? lapantall

			$query="DELETE 
					FROM tutor
					WHERE Id_Tutor =	'".$_POST['txtId_Tutor']."'";

			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='../Programa/lista_modificarPruebaTutor.php';
					</script>";
		}
	}
?>