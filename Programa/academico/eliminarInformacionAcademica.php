<?php
include("..\conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */

	$Numerop=$_GET['Codigo'];
	$query="SELECT * FROM PRODUCTOS WHERE codigo = '".$Numerop."'";
	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<center>
			<form method=POST name=frm action="grabaractualiza.php">
			<table width=400 border=1>
			<tr>
			<td colspan=2 align=CENTER>
					<h3>FORMULARIO DE ELIMINACION</h3>
			</td>
			</tr>
				
			<tr>
     				 <td width=50%>CODIGO</td>
      		<td>
        			<input name="txtcodigo" type="text" id="txtcodigo" size=45/>
      		</td>
    		</tr>
    		<tr>
      			<td>informe academico</td>
      		<td>
        		<input name="txtInf_informeacademico" type="text" id="txtInf_informeacademico" size=45/>
      		</td>
    		</tr>
			<tr>
      			<td>GRADO</td>
      		<td>
        		<input name="txtInf_grado" type="text" id="txtInf_grado" size=45/>
      		</td>
    		</tr>
			<tr>
      			<td>COLEGIO</td>
      		<td>
        <input name="txtInf_colegio" type="text" id="txtInf_colegio" size=45/>
      </td>
    </tr>
	<tr>
  <tr>
      <td>SEDE</td>
      <td>
        <input name="txtinf_sede" type="text" id="txtinf_sede" size=20/>
      </td>
    </tr>
	<tr>
      <td>NOMBRE SEDE</td>
      <td>
        <input name="txtInf_nombresede" type="text" id="txtInf_nombresede" size=45/>
      </td>
    </tr>
    <tr>
    
    <td>TALLER</td>
    <td> 
      <?php
  include("..\conexion.php");
  $query="select Id_Taller , Tal_Nombretaller from taller";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select name='cmbtaller'>";
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
		}
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