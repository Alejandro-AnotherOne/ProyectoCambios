<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Registro de informacion academico</title>
 

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

if(formulario.txtInf_informeacademico.value=='')
{
alert('Sr Usuario debe ingresar el Informe academico');
formulario.txtInf_informeacademico.focus();
return false;
}

if(formulario.txtInf_grado.value=='')
{
alert('Sr Usuario debe ingresar el grado ');
formulario.txtInf_grado.focus();
formulario.txtInf_grado.value='';
return false;
}

if(formulario.Inf_colegio.value=='')
{
alert('Sr Usuario debe ingresar la Informacion del colegio');
formulario.Inf_colegio.focus();
formulario.Inf_colegio.value='';
return false;
}

if(formulario.txtinf_sede.value=='')
{
alert('Sr Usuario debe ingresar la informacion de la sede ');
formulario.txtinf_sede.focus();
formulario.txtinf_sede.value='';
return false;
}

if(formulario.txtInf_nombresede.value=='')
{
alert('Sr Usuario debe ingresar el nombre de la sede ');
formulario.txtInf_nombresede.focus();
formulario.txtInf_nombresede.value='';
return false;
}


if(formulario.cmbtaller.value=='')
{
alert('Sr Usuario debe seleccionar una taller');
formulario.cmbtaller.focus();
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

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarInformacionAcademica.php">


  <table width="400" border="1">
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
  include(".\conexion.php");
  $query="select Id_Taller , Tal_Nombretaller from taller";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select name='cmbtaller'>";
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
