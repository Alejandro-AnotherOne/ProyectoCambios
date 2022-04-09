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

return true;
}

</script>

<?php
	include("conexion.php");

	$Codigop=$_GET['Codigo'];
	$query="SELECT * FROM acudiente WHERE acudiente.Id_Acudiente = ' " .$Codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaracudiente.php">
			<table width="400" border="1">
			<tr>
			<td width=50%>CODIGO</td>
			<td>
				<input name="txtId_Acudiente " type="text" id="txtId_Acudiente " size=45 value= "<?php echo $Rs['Id_Acudiente'];?>" readonly=""/>
			</td>
			</tr>
			<tr>
			<td>NOMBRES</td>
			<td>
				<input name="txtAcu_nombreacudiente" type="text" id="txtAcu_nombreacudiente" size=30 value= "<?php echo $Rs['Acu_nombreacudiente'];?>"/>
			</td>
			</tr>
			<tr>
			<td>APELLIDOS</td>
			<td>
				<input name="txtAcu_apellidoacudiente" type="text" id="txtAcu_apellidoacudiente" size=30 value= "<?php echo $Rs['Acu_apellidoacudiente'];?>"/>
			</td>
			</tr>
			<tr>
			<td>TIPO DOCUMENTO</td>
			<td>
				<input name="txtAcu_tipodocumento" type="text" id="txtAcu_tipodocumento" size=30 value= "<?php echo $Rs['Acu_tipodocumento'];?>"/>
			</td>
			</tr>
			<tr>
			<td>EDAD </td>
			<td>
				<input name="txtAcu_edad" type="text" id="txtAcu_edad" size=30 value= "<?php echo $Rs['Acu_edad'];?>"/>
			</td>
			</tr>
			<tr>
			<td>TELEFONO</td>
			<td>
				<input name="txtAcu_telefono" type="text" id="txtTut_Telefono" size=30 value= "<?php echo $Rs['Acu_telefono'];?>"/>
			</td>
			</tr>
			<tr>
			<td>DIRECCION</td>
			<td>
				<input name="txtAcu_direccion" type="text" id="txtAcu_direccion" size=30 value= "<?php echo $Rs['Acu_direccion'];?>"/>
			</td>
			</tr>
			<tr>
			<td>BARRIO DE RESIDENCIA</td>
			<td>
				<input name="txtAcu_barrio" type="text" id="txtAcu_barrio" size=30 value= "<?php echo $Rs['Acu_barrio'];?>"/>
			</td>
			</tr>
			<tr>
			<td> CORREO ELECTRONICO </td>
			<td>
				<input name="txtAcu_correoelectronico" type="text" id="txtAcu_correoelectronico" size=30 value= "<?php echo $Rs['Acu_correoelectronico'];?>"/>
			</td>
			</tr>
			<tr>
			<td>ESTADO SOCIOECONOMICO</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Socioeconomico , Soc_Beneficiario, Id_Ayuda from estadosocioeconomico where ".$Rs['Id_Socioeconomico'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbSocioeconomico'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
 
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Id_Socioeconomico'] == $row[0])
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