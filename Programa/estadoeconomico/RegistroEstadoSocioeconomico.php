<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de Productos</title>

<script>

function validar(formulario)
{


if(formulario.Id_Socioeconomico.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.Id_Socioeconomico.focus();
return false;
}

if (isNaN(formulario.Id_Socioeconomico.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.Id_Socioeconomico.focus();
formulario.Id_Socioeconomico.value='';
return false;
}

if(formulario.Soc_Descripcion_Beneficiario.value=='')
{
alert('Sr Usuario debe ingresar la descripcion');
formulario.Soc_Descripcion_Beneficiario.focus();
return false;
}

if(formulario.cmbayuda.value==0)
{
alert('Sr Usuario debe seleccionar una ayuda');
formulario.cmbayuda.focus();
return false;
}

return true;
}


</script>

<h1 ALIGN=CENTER>ENTRA DATOS DEL ESTADO SOCIOECONOMICO </h1>

</head>


FORMULARIO 

<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarsocioeconomico.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>codigo</td>
      <td>
        <input name="Id_Socioeconomico" type="text" id="Id_Socioeconomico" size=18/>
      </td>
    </tr>
    <tr>
      <td>descripcion estado socio economico</td>
      <td>
        <input name="Soc_Beneficiario" type="text" id="Soc_Beneficiario" size=20/>
      </td>
    </tr>
	<tr>
   
      <td>ayuda<td>
        <?php
	 include("conexion.php");
   
		$query="SELECT `Id_Ayuda`, `Id_Entrega` FROM `ayuda` ";
		$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
		
		echo "<select name='cmbayuda'>";
		 echo  "<option selected value=0> --Seleccione una opcion-- </option>";
		
		while($row=mysqli_fetch_array($result))
		{
                    echo  "<option value=$row[0]> $row[1]  </option>";
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
</form>
</center>


</body>
</html>
