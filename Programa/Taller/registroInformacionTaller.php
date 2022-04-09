<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>

 <script>

function validar(formulario)
{

if(formulario.txtId_Ini_Taller.value=='')
{
alert(' ingresar el codigo del taller');
formulario.txtId_Ini_Taller.focus();
return false;
}

if (isNaN(formulario.txtId_Ini_Taller.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtId_Ini_Taller.focus();
formulario.txtId_Ini_Taller.value='';
return false;
}

if(formulario.Ini_des_taller.value=='')
{
alert('Nombre o descripcion del taller');
formulario.Ini_des_taller.focus();
return false;
}

if(formulario.Ini_fecha_inicio.value=='')
{
alert('Fecha Inicio del taller  ');
formulario.Ini_fecha_inicio.focus();
formulario.Ini_fecha_inicio.value='';
return false;
}

if(formulario.Ini_Fecha_fin.value=='')
{
alert('Fecha Fin del taller ');
formulario.Ini_Fecha_fin.focus();
return false;
}

if(formulario.Ini_Intensidad.value=='')
{
alert('Intensidad del taller');
formulario.Ini_Intensidad.focus();
return false;
}
if(formulario.Ini_Dias_taller.value=='')
{
alert('Dias del Taller');
formulario.Ini_Dias_taller.focus();
return false;
}
if(formulario.Ini_jornada.value=='')
{
alert('Jormada del taller');
formulario.Ini_jornada.focus();
return false;
}

if(formulario.cmbId_Tutor.value=='')
{
alert('Sr Usuario debe seleccionar un/a Tutor/a');
formulario.cmbId_Tutor.focus();
return false;

}
}

return true;

</script>
  <!--==========================
  VALIDACION
  ============================-->
  
  <h1 ALIGN=CENTER>FORMULARIO </h1>

</head>

  <h2 ALIGN=CENTER>ENTRADA DE DATOS DEL TALLER</h2>

<body>
 

<!--==========================
  FORMULARIO
============================-->
  <center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarInformacioTaller.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO TALLER</td>
      <td>
        <input name="txtId_Taller" type="text" id="txtId_Tutor" size=15/>
      </td>
    </tr>
    <tr>
      <td>NOMBRE DEL TALLER</td>
      <td>
        <input name="txtinfo_Nombre_Taller" type="text" id="txtinfo_Nombre_Taller" size=45/>
      </td>
    </tr>
	<tr>
      <td>DESCRIPCION DEL TALLER</td>
      <td>
        <input name="txtinfo_Descripcion_taller" type="text" id="txtinfo_Descripcion_taller" size=45/>
      </td>
    </tr>
    <tr>
    <td>TUTOR</td>
    <td> 
      <?php
   include("conexion.php");
   $query="select Id_Tutor, Tut_Nombretutor  from tutor";
   $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
   echo "<select name='cmbtutor'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
   while($row=mysqli_fetch_array($result))
   {
    echo  "<option value=$row[0]> $row[1] </option>";
              }  
   echo "</select>";	
   ?></td>
  
  <tr>
    <tr>
      <td>SALON</td>
      <td>
        <input name="txtinf_Salon" type="text" id="txtinf_Salon" size=45/>
      </td>
    </tr>
	<tr>
      <td>HORARIO</td>
      <td>
        <input name="txtinf_Horario" type="text" id="txtinf_Horario" size=45/>
      </td>
    </tr>
	
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
