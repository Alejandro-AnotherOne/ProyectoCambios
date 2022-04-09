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
			$query="UPDATE beneficiario
					SET 
                        Ben_Nombres='".$_POST["txtBen_Nombres"]."',
						Ben_Apellidos='".$_POST["txtBen_Apellidos"]."',
						Ben_FechaNacimiento='".$_POST["txtBen_FechaNacimiento"]."',
						Ben_Edad='".$_POST["txtBen_Edad"]."',
						Ben_Genero='".$_POST["txtBen_Genero"]."',
						Id_Rh='".$_POST["cmbrh"]."',
						Ben_Telefono='".$_POST["txtBen_Telefono"]."',
						Bene_direccion='".$_POST["txtBene_direccion"]."',
						Ben_Barrio='".$_POST["txtBen_Barrio"]."',
						Ben_Discapacidad='".$_POST["txtBen_Discapacidad"]."',
						Ben_Alergias='".$_POST["txtBen_Alergias"]."',
						Ben_Desplazado='".$_POST["txtBen_Desplazado"]."',
						Ben_Nacionalidad='".$_POST["txtBen_Nacionalidad"]."',
						Id_Zapatos='".$_POST["cmbzapatos"]."',
						Id_camisa='".$_POST["cmbcamisa"]."',
						Id_Pantalon='".$_POST["cmbpantalon"]."',
						Id_Departamento='".$_POST["cmbdepartamento"]."',
						Id_Acudiente='".$_POST["cmbacudiente"]."',
						Id_InformacionAcademica='".$_POST["cmbinformacionacademica"]."',
						Id_Eps='".$_POST["cmbEPS"]."',
						Id_Colegio='".$_POST["cmbcolegio"]."' 
						WHERE Id_Beneficiario=".$_POST['txtcodigo'];


			$result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
			//pruebelo
			echo "<script>
					alert('Los datos fueron actualizados correctamente');
					location.href='lista_modificarPruebaBeneficiario.php';
					</script>";
		}
		else
		{
			
			//echo "El codigo es $Numerop ";
			//echo "El codigo es $Codigop ";
			//echo"Enviado desde eliminacion"; aca seria lo mismo ? cual es? lapantall

			$query="DELETE 
					FROM beneficiario
					WHERE Id_beneficiario =	'".$_POST['txtcodigo']."'";

			$result=mysqli_query($link,$query) or die ("Error en el borrado de los datos. Error: ".mysqli_error());
			echo "<script>
					alert('Los datos fueron borrados correctamente');
					location.href='lista_modificarPruebaBeneficiario.php';
					</script>";
		}
	}
?>