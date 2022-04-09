<?php
include("conexion.php");
?>
<html>
<head>
</head>
<script>

function validar(formulario)
{

if(formulario.txtId_Tutor.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtId_Tutor.focus();
return false;
}

if (isNaN(formulario.txtId_Tutor.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtId_Tutor.focus();
formulario.txtId_Tutor.value='';
return false;
}

if(formulario.txtTut_Nombretutor.value=='')
{
alert('Debe ingresar el Nombre');
formulario.txtTut_Nombretutor.focus();
return false;
}

if(formulario.txtTut_Apellidotutor.value=='')
{
alert('Debe ingresar el Apellido');
formulario.txtTut_Apellidotutor.focus();
return false;
}

if(formulario.txtTut_tipodedocumento.value=='')
{
alert('Debe ingresar el tipo de documento');
formulario.txtTut_tipodedocumento.focus();
return false;
}

if(formulario.txtTut_Documento.value=='')
{
alert('Debe ingresar el documento');
formulario.txtTut_Documento.focus();
formulario.txtTut_Documento.value='';
return false;
}

if(formulario.txtTut_Direccion.value=='')
{
alert('Debe ingresar la Direccion');
formulario.txtTut_Direccion.focus();
return false;
}

if(formulario.txtTut_Telefono.value=='')
{
alert('Debe ingresar un telefono');
formulario.txtTut_Telefono.focus();
formulario.txtTut_Telefono.value='';
return false;
}



if(formulario.txtTut_nivelescolar_prof.value==0)
{
alert('Debe ingresar el nivel academico que tiene');
formulario.txtTut_nivelescolar_prof.focus();
return false;
}

return true;
}



if(formulario.cmbrefuerzo.value==0)
{
alert(' Debe seleccionar el refuerzo');
formulario.cmbrefuerzo.focus();
return false;
}

return true;
}

</script>

<?php
	include("conexion.php");

	$Codigop=$_GET['Codigo'];
	$query="SELECT * FROM tutor WHERE tutor.Id_Tutor = ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaPruebaTutor.php">
			<table width="400" border="1">
			<tr>
			<td width=50%>CODIGO</td>
			<td>
				<input name="txtId_Tutor" type="text" id="txtId_Tutor" size=45 value= "<?php echo $Rs['Id_Tutor'];?>" readonly=""/>
			</td>
			</tr>
			<tr>
			<td>NOMBRE TUTOR</td>
			<td>
				<input name="txtTut_Nombretutor" type="text" id="txtTut_Nombretutor" size=30 value= "<?php echo $Rs['Tut_Nombretutor'];?>"/>
			</td>
			</tr>
			<tr>
			<td>APELLIDO TUTOR</td>
			<td>
				<input name="txtTut_Apellidotutor" type="text" id="txtTut_Apellidotutor" size=30 value= "<?php echo $Rs['Tut_Apellidotutor'];?>"/>
			</td>
			</tr>
			<tr>
			<td>TIPO DOCUMENTO</td>
			<td>
				<input name="txtTut_tipodedocumento" type="text" id="txtTut_tipodedocumento" size=30 value= "<?php echo $Rs['Tut_tipodedocumento'];?>"/>
			</td>
			</tr>
			<tr>
			<td> DOCUMENTO</td>
			<td>
				<input name="txtTut_Documento" type="text" id="txtTut_Documento" size=30 value= "<?php echo $Rs['Tut_Documento'];?>"/>
			</td>
			</tr>
				<tr>
			<td>DIRECCION</td>
			<td>
				<input name="txtTut_Direccion" type="text" id="txtTut_Direccion" size=30 value= "<?php echo $Rs['Tut_Direccion'];?>"/>
			</td>
			</tr>
			<tr>
			<td>TELEFONO</td>
			<td>
				<input name="txtTut_Telefono" type="text" id="txtTut_Telefono" size=30 value= "<?php echo $Rs['Tut_Telefono'];?>"/>
			</td>
			</tr>
			<tr>
			<td> NIVEL ESCOLAR</td>
			<td>
				<input name="txtTut_nivelescolar_prof" type="text" id="txtTut_nivelescolar_prof" size=30 value= "<?php echo $Rs['Tut_nivelescolar_prof'];?>"/>
			</td>
			</tr>
			<tr>
			<td>REFUERZO</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Refuerzo , Ref_nombre from refuerzo where ".$Rs['Id_Tutor'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbrefuerzo'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";

		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Refuerzo'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?>
		</td>
		
    </tr>
	
 
    <tr>
      <td>
     
	<center>
        <input type="submit" name="Submit" value="Enviar" class="btn btn-primary"/>
		</center>
      </td>
      <td>
	<center>
        <input type="reset" name="Submit2" value="Restablecer" />
		</center>
      </td>
    </tr>
  </table>

<input type="hidden" name="Accion" value="Update" />
				
			</form>
			</center>
<?php
	
	}
	// mysqli_close();
	mysqli_close($link);
?>
</html>