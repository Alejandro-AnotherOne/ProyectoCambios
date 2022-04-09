<?php
include("conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['codigo'];
	//return $Numerop;
	$query="SELECT * FROM beneficiario WHERE Id_Beneficiario = '".$Numerop."'";

	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualizaPruebaBeneficiario.php">
				<input  name="txtcodigo" type='hidden' value="<?php echo $Rs['Id_Beneficiario'];?>">
			<table width=400 border=1>
			<tr>
			<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
			</td>
			<tr>
			<td>nombres </td>
			<td>
				<input name="txtBen_Nombres" type="text" id="txtBen_Nombres" placeholder=" nombres completos"  size=20/>
			</td>
			</tr>
			<tr>
			<td>apellidos </td>
			<td>
				<input name="txtBen_Apellidos" type="text" id="txtBen_Apellidos" placeholder=" apellidos completos"  size=20/>
			</td>
			</tr>
			<tr>
			<td>fecha nacimiento</td>
			<td>
				<input name="txtBen_FechaNacimiento" type="date" id="txtBen_FechaNacimiento" />
			</td>
			</tr>
			<tr>
			<td>edad</td>
			<td>
				<input name="txtBen_Edad" type="text" id="txtBen_Edad" size=2/>
			</td>
			</tr>
			<tr>
		<tr>
			<td>RH</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_Rh, rh_Descripcion FROM rh";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbrh'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	

		
		?></td>
		</tr>
			<tr>
			<td>telefono</td>
			<td>
				<input name="txtBen_Telefono" type="text" id="txtBen_Telefono" size=10/>
			</td>
			</tr>
			<tr>
			<tr>
			<td>direccion</td>
			<td>
				<input name="txtBene_direccion" type="text" id="txtBene_direccion" size=30/>
			</td>
			</tr>
			<tr>
			<tr>
			<td>barrio</td>
			<td>
				<input name="txtBen_Barrio" type="text" id="txtBen_Barrio" size=30/>
			</td>
			</tr>
			<tr>
			<td>discapacidad</td>
			<td>
				<input name="txtBen_Discapacidad" type="text" id="txtBen_Discapacidad" size=10/>
			</td>
			</tr>
			<tr>
			<td>alergias</td>
			<td>
				<input name="txtBen_Alergias" type="text" id="txtBen_Alergias" size=20/>
			</td>
			</tr>
			<tr>
			<td >Dezplazado:<td>
			<div class="form-check">
		<input class="form-check-input" type="radio" name="txtBen_Desplazado" id="txtBen_Desplazado">
		<label class="form-check-label" for="txtBen_Desplazado">
			SI
		</label>
		</div>
		<div class="form-check">
		<input class="form-check-input" type="radio" name="txtBen_Desplazado" id="txtBen_Desplazado" checked size>
		<label class="form-check-label" for="txtBen_Desplazado">
			No 
		</label>
		</div>
			</td>
			</td>
			</tr>
			<tr>
			<td>Nacionalidad</td>
			<td>
				<input name="txtBen_Nacionalidad" type="text" id="txtBen_Nacionalidad" size=20/>
			</td>
			</tr>
			<tr>
			<td>Tallas zapatos </td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_Zapatos, Descripcion FROM zapatos";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbzapatos'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Talla camisas</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_camisa, Talla_camisa FROM camisa";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbcamisa'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Talla pantalon</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_Pantalon, talla_pantalon FROM pantalon";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbpantalon'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
			<tr>
			<td>departamento</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT `Id_Departamento`, `Dep_NomDepartamento` FROM `departamento`";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbdepartamento'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Acudiente</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_Acudiente, Acu_nombreacudiente FROM acudiente";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbacudiente'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Informacion Academica</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_InformacionAcademica , Inf_Enfasisacademico FROM informacion_academica";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbinformacionacademica'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>EPS</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_Eps, Eps_nombre FROM eps";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbEPS'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>COLEGIO</td>
			<td> 
			<?php
		include("conexion.php");
		$query="SELECT Id_Colegio, Col_Nombre FROM colegio";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbcolegio'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
						echo  "<option value=$row[0]> $row[1] </option>";
					}
			
		echo "</select>";		
			?></td>
			
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