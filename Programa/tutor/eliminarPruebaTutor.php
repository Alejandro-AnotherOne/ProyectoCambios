<?php
include("conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM tutor WHERE Id_Tutor = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualizaPruebaTutor.php">
				<input  name="txtId_Tutor" type='hidden' value="<?php echo $Rs['Id_Tutor'];?>">
			<table width=400 border=1>
			<tr>
			<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
			</td>
			<tr>
			<td>NOMBRE TUTOR</td>
			<td>
				<input name="txtTut_Nombretutor" type="text" id="txtTut_Nombretutor" readonly="readonly"  size=30 value= "<?php echo $Rs['Tut_Nombretutor'];?>"/>
			</td>
			</tr>
			<tr>
			<td>APELLIDO TUTOR</td>
			<td>
				<input name="txtTut_Apellidotutor" type="text" id="txtTut_Apellidotutor" readonly="readonly" size=30 value= "<?php echo $Rs['Tut_Apellidotutor'];?>"/>
			</td>
			</tr>
			<tr>
			<td>TIPO DOCUMENTO</td>
			<td>
				<input name="txtTut_tipodedocumento" type="text" id="txtTut_tipodedocumento" readonly="readonly" size=30 value= "<?php echo $Rs['Tut_tipodedocumento'];?>"/>
			</td>
			</tr>
			<tr>
			<td> DOCUMENTO</td>
			<td>
				<input name="txtTut_Documento" type="text" id="txtTut_Documento" readonly="readonly" size=30 value= "<?php echo $Rs['Tut_Documento'];?>"/>
			</td>
			</tr>
				<tr>
			<td>DIRECCION</td>
			<td>
				<input name="txtTut_Direccion" type="text" id="txtTut_Direccion" readonly="readonly" size=30 value= "<?php echo $Rs['Tut_Direccion'];?>"/>
			</td>
			</tr>
			<tr>
			<td>TELEFONO</td>
			<td>
				<input name="txtTut_Telefono" type="text" id="txtTut_Telefono" readonly="readonly" size=30 value= "<?php echo $Rs['Tut_Telefono'];?>"/>
			</td>
			</tr>
			<tr>
			<td> NIVEL ESCOLAR</td>
			<td>
				<input name="txtTut_nivelescolar_prof" type="text" id="txtTut_nivelescolar_prof" readonly="readonly" size=30 value= "<?php echo $Rs['Tut_nivelescolar_prof'];?>"/>
			</td>
			</tr>
			<tr>
			<td>REFUERZO</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Refuerzo , Ref_nombre from refuerzo";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbrefuerzo'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
				
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['codigo'] == $row[0])
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
						<input type="submit" name="Submit" value="Enviar" />
					</center>
				  </td>
				  <td>
					<center>
						<input type="reset" name="Submit2" value="Restablecer" />
					</center>
				  </td>
				</tr>
			
				</table>
					
				<input type="hidden" name="Accion" value="Delete" />
				
			</form>
			</center>
			<?php
		}
	}
	mysqli_close($link);
?>