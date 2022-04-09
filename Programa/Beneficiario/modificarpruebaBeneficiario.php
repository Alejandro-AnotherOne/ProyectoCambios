<html>
<head>
	<title>Modificar beneficiario</title>
</head>
<script>

function validar(formulario)
{

if(formulario.txtcodigo.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtcodigo.focus();
return false;
}

if (isNaN(formulario.txtcodigo.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtcodigo.focus();
formulario.txtcodigo.value='';
return false;
}

if(formulario.txtBen_Nombres.value=='')
{
alert('Sr Usuario debe ingresar los nombres');
formulario.txtInf_informeacademico.focus();
return false;
}

if(formulario.txtBen_Apellidos.value=='')
{
alert('Sr Usuario debe ingresar los apellidos ');
formulario.txtInf_grado.focus();
formulario.txtInf_grado.value='';
return false;
}

if(formulario.txtBen_FechaNacimiento.value=='')
{
alert('Sr Usuario debe ingresar la fecha de nacimiento');
formulario.txtBen_FechaNacimiento.focus();
formulario.txtBen_FechaNacimiento.value='';
return false;
}

if(formulario.txtBen_Edad.value=='')
{
alert('Sr Usuario debe ingresar la edad ');
formulario.txtBen_Edad.focus();
formulario.txtBen_Edad.value='';
return false;
}

if(formulario.cmbrh.value=='')
{
alert('Sr Usuario debe seleccionar el rh');
formulario.cmbrh.focus();
return false;
}

return true;
}

if(formulario.txtBen_Telefono.value=='')
{
alert('Sr Usuario debe ingresar el telefono');
formulario.txtBen_Telefono.focus();
return false;
}

if(formulario.txtBene_direccion	.value=='')
{
alert('Sr Usuario debe ingresar la direccion ');
formulario.txtBene_direccion.focus();
formulario.txtBene_direccion.value='';
return false;
}

if(formulario.txtBen_Barrio.value=='')
{
alert('Sr Usuario debe ingresar el barrio');
formulario.txtBen_Barrio.focus();
formulario.txtBen_Barrio.value='';
return false;
}

if(formulario.txtBen_Discapacidad.value=='')
{
alert('Sr Usuario debe ingresar la discapacidad si tiene o poner no ');
formulario.txtBen_Discapacidad.focus();
formulario.txtBen_Discapacidad.value='';
return false;
}

if(formulario.txtBen_Alergias.value=='')
{
alert('Sr Usuario debe ingresar la alergia si tiene o poner no ');
formulario.txtBen_Alergias.focus();
formulario.txtBen_Alergias.value='';
return false;
}

if(formulario.txtBen_Desplazado.value=='')
{
alert('Sr Usuario debe ingresar si es desplazado o poner no');
formulario.txtBen_Desplazado.focus();
return false;
}

if(formulario.cmbzapatos.value=='')
{
alert('Sr Usuario debe seleccionar la talla de zapatos');
formulario.cmbzapatos.focus();
return false;
}

return true;
}

if(formulario.cmbcamisa.value=='')
{
alert('Sr Usuario debe seleccionar la talla de camisas');
formulario.cmbcamisa.focus();
return false;
}

return true;
}

if(formulario.cmbpantalon.value=='')
{
alert('Sr Usuario debe seleccionar la talla de pantalon');
formulario.cmbpantalon.focus();
return false;
}

return true;
}

if(formulario.cmbdepartamento.value=='')
{
alert('Sr Usuario debe seleccionar el departamento');
formulario.cmbdepartamento.focus();
return false;
}

return true;
}

if(formulario.cmbacudiente.value=='')
{
alert('Sr Usuario debe seleccionar el acudiente');
formulario.cmbacudiente.focus();
return false;
}

return true;
}

if(formulario.cmbinformacionacademica.value=='')
{
alert('Sr Usuario debe seleccionar la informacion academica');
formulario.cmbinformacionacademica.focus();
return false;
}

return true;
}

if(formulario.cmbEPS.value=='')
{
alert('Sr Usuario debe seleccionar la eps');
formulario.cmbEPS.focus();
return false;
}

return true;
}

if(formulario.cmbcolegio.value=='')
{
alert('Sr Usuario debe seleccionar el colegio');
formulario.cmbcolegio.focus();
return false;
}

return true;
}


</script>

<?php
	include("conexion.php");

	$codigop=$_GET['Codigo'];


	$query="SELECT * FROM beneficiario WHERE beneficiario.Id_Beneficiario = ' " .$codigop."  '  " ;
	$result=mysqli_query($link,$query) or die ("Error en la consulta de beneficiarios. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0)
	{
         $Rs=mysqli_fetch_array($result)
			
					?>
			<center>
			<form method=POST name=frm onsubmit="return validar(this)" action="grabaractualizaPruebaBeneficiario.php">
			<table width="400" border="1">
			<tr>
			<td width=50%>CODIGO</td>
			<td>
				<input name="txtcodigo" type="text" id="txtcodigo" size=18 value= "<?php echo $Rs['Id_Beneficiario'];?>" readonly=""/>
			</td>
			</tr>
			<tr>
			<td>nombres </td>
			<td>
				<input name="txtBen_Nombres" type="text" id="txtBen_Nombres" placeholder=" nombres completos"  size=20/ value= "<?php echo $Rs['Ben_Nombres'];?>"/>
			</td>
			</tr>
			<tr>
			<td>apellidos </td>
			<td>
				<input name="txtBen_Apellidos" type="text" id="txtBen_Apellidos" placeholder=" apellidos completos"  size=20/ value= "<?php echo $Rs['Ben_Apellidos'];?>"/>>
			</td>
			</tr>
			<tr>
			<td>fecha nacimiento</td>
			<td>
				<input name="txtBen_FechaNacimiento" type="date" id="txtBen_FechaNacimiento"  value= "<?php echo $Rs['Ben_FechaNacimiento'];?>"/>
			</td>
			</tr>
			<tr>
			<td>edad</td>
			<td>
				<input name="txtBen_Edad" type="text" id="txtBen_Edad" size=2 value= "<?php echo $Rs['Ben_Edad'];?>"/>
			</td>
			</tr>
			<tr>
			<td>Genero</td>
			<td>
				<input name="txtBen_Genero" type="text" id="txtBen_Genero" size=2 value= "<?php echo $Rs['Ben_Genero'];?>"/>
			</td>
			</tr>
			<tr>
		<tr>
			<td>RH</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Rh, rh_Descripcion from rh where ".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbrh'>";
		
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Rh'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	

		
		?></td>
		</tr>
			<tr>
			<td>telefono</td>
			<td>
				<input name="txtBen_Telefono" type="text" id="txtBen_Telefono" size=10 value= "<?php echo $Rs['Ben_Telefono'];?>"/>
			</td>
			</tr>
			<tr>
			<tr>
			<td>direccion</td>
			<td>
				<input name="txtBene_direccion" type="text" id="txtBene_direccion" size=30 value= "<?php echo $Rs['Bene_direccion'];?>"/>
			</td>
			</tr>
			<tr>
			<tr>
			<td>barrio</td>
			<td>
				<input name="txtBen_Barrio" type="text" id="txtBen_Barrio" size=30 value= "<?php echo $Rs['Ben_Barrio'];?>"/>
			</td>
			</tr>
			<tr>
			<td>discapacidad</td>
			<td>
				<input name="txtBen_Discapacidad" type="text" id="txtBen_Discapacidad" size=10 value= "<?php echo $Rs['Ben_Discapacidad'];?>"/>
			</td>
			</tr>
			<tr>
			<td>alergias</td>
			<td>
				<input name="txtBen_Alergias" type="text" id="txtBen_Alergias" size=20 value= "<?php echo $Rs['Ben_Alergias'];?>"/>
			</td>
			</tr>
			<tr>
			<td >Dezplazado:<td>
			<div class="form-check">
		<input class="form-check-input" type="radio" name="txtBen_Desplazado" id="txtBen_Desplazado" value= "<?php echo $Rs['Ben_Desplazado'];?>"/>
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
			<td>Nacionalidad</td>
			<td>
				<input name="txtBen_Nacionalidad" type="text" id="txtBen_Nacionalidad" size=20 value= "<?php echo $Rs['Ben_Nacionalidad'];?>"/>
			</td>
			</tr>
			<tr>
			<td>Tallas zapatos </td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Zapatos, Descripcion FROM zapatos where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbzapatos'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Zapatos'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Talla camisas</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_camisa, Talla_camisa from camisa where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbcamisa'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Camisa'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Talla pantalon</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Pantalon, talla_pantalon from pantalon where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbpantalon'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Pantalon'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		</tr>
			<tr>
			<td>departamento</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select `Id_Departamento`, `Dep_NomDepartamento` FROM `departamento` where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbdepartamento'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Departamento'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>Acudiente</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Acudiente, Acu_nombreacudiente from acudiente where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbacudiente'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Acudiente'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";
		?></td>
		</tr>
		<tr>
			<td>Informacion Academica</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_InformacionAcademica, Inf_Enfasisacademico from informacion_academica where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbinformacionacademica'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_InformacionAcademica'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>EPS</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Eps, Eps_nombre from eps where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbEPS'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Eps'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		</tr>
		<tr>
			<td>COLEGIO</td>
			<td> 
			<?php
		include("conexion.php");
		$query="select Id_Colegio, Col_Nombre from colegio where".$Rs['Id_Beneficiario'];
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbcolegio'>";
		echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
				if ($Rs['Id_Colegio'] == $row[0])
				{
					echo "<option selected value= ".$row[0].">".$row[1]." </option>";	

				}	
				else 
				{
					echo "<option value= $row[0] >$row[1] </option>";						
				}
                    
        }
        
		echo "</select>";	
		?></td>
		
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