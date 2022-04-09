<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Registro de acudiente</title>
 

 <!--==========================
  validacion
  ============================-->

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

if(formulario.txtAcu_nombreacudiente.value=='')
{
alert('Sr Usuario debe ingresar los nombres');
formulario.txtAcu_nombreacudiente.focus();
return false;
}

if(formulario.txtAcu_apellidoacudiente.value=='')
{
alert('Sr Usuario debe ingresar los apellidos ');
formulario.txtAcu_apellidoacudiente.focus();
formulario.txtAcu_apellidoacudiente.value='';
return false;
}


if(formulario.txtAcu_edad.value=='')
{
alert('Sr Usuario debe ingresar la edad ');
formulario.txtAcu_edad.focus();
formulario.txtAcu_edad.value='';
return false;
}


if(formulario.txtAcu_genero.value=='')
{
alert('Sr Usuario Seleccione El Genero ');
formulario.txtAcu_genero.focus();
formulario.txtAcu_genero.value='';
return false;
}


if(formulario.txtAcu_telefono.value=='')
{
alert('Sr Usuario debe ingresar el telefono');
formulario.txtAcu_telefono.focus();
return false;
}

if(formulario.txtAcu_direccion.value=='')
{
alert('Sr Usuario debe ingresar la direccion ');
formulario.txtAcu_direccion.focus();
formulario.txtAcu_direccion.value='';
return false;
}

if(formulario.txtAcu_barrio.value=='')
{
alert('Sr Usuario debe ingresar el barrio');
formulario.txtAcu_barrio.focus();
formulario.txtAcu_barrio.value='';
return false;
}

if(formulario.cmbEstadoSocioeconomico.value=='')
{
alert('Sr Usuario debe seleccionar el estado socioeconomico');
formulario.cmbEstadoSocioeconomico.focus();
return false;
}

return true;
}

</script>

<h1 ALIGN=CENTER>FORMULARIO </h1>

</head>

<h2 ALIGN=CENTER>ENTRA DE DATOS</h2>


<body>

   <!--==========================
  FORMULARIO
============================-->
  <center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarAcudiente.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO</td>
      <td>
        <input name="txtcodigo" type="text" id="txtcodigo" size=18/>
      </td>
    </tr>
    <tr>
      <td>NOMBRES DEL ACUDIENTE </td>
      <td>
        <input name="txtAcu_nombreacudiente" type="text" id="txtAcu_nombreacudiente" placeholder=" nombres completos"  size=30/>
      </td>
    </tr>
    <tr>
      <td>APELLIDOS DEL ACUDIENTE  </td>
      <td>
        <input name="txtAcu_apellidoacudiente" type="text" id="txtAcu_apellidoacudiente" placeholder=" apellidos completos"  size=30/>
      </td>
    </tr>
	<tr>
      <td>  TIPO DE DOCUMENTO</td>
      <td>
        <input name="txtAcu_tipodocumento" type="text" id="txtAcu_tipodocumento" size=10 />
      </td>
    </tr>
	<tr>
      <td>EDAD</td>
      <td>
        <input name="txtAcu_edad" type="text" id="txtAcu_edad" size=2/>
      </td>
    </tr>
    <tr>
      <td >Genero:<td>
      <select name="txtAcu_genero" type="text" id="txtAcu_genero" size=1/>
            <option>MASCULINO</option>
            <option>FEMENINO</option>
            <option>COMUNIDAD LGTBI</option>
        </select>
      </td>
     </td>
	<tr>
      <td>TELEFONO</td>
      <td>
        <input name="txtAcu_telefono" type="text" id="txtAcu_telefono" size=10/>
      </td>
    </tr>
    <tr>
    <tr>
      <td>DIRECCION DE RESIDENCIA</td>
      <td>
        <input name="txtAcu_direccion" type="text" id="txtAcu_direccion" size=30/>
      </td>
    </tr>
    <tr>
    <tr>
      <td>BARRIO</td>
      <td>
        <input name="txtAcu_barrio" type="text" id="txtAcu_barrio" size=30/>
      </td>
    </tr>
    <tr>
    <td>ESTADO SOCIOECONOMICO</td>
    <td> 
      <?php
  include("conexion.php");
  $query="SELECT `Id_Socioeconomico`, `Soc_Beneficiario`, `Id_Ayuda` FROM `estadosocioeconomico` ";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select name='cmbEstadoSocioeconomico'>";
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
</form>
</center>
 <!--======FORMULARIO============-->


 
</body>

</html>
