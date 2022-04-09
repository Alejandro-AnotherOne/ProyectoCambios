<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>

<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  
  <meta charset="utf-8">
  <title> REGISTRO INFORMACION ACADEMICA </title> 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

   <!-- icon Stylesheet File -->

  <link rel="shortcut icon" href="favicon.ico" />

 <!--==========================
  validacion
  ============================-->

  <script>

function validar(formulario)
{

if(formulario.txtId_Taller.value=='')
{
alert(' ingresar el codigo del taller');
formulario.txtId_Taller.focus();
return false;
}

if (isNaN(formulario.txtId_Taller.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtId_Taller.focus();
formulario.txtId_Tallero.value='';
return false;
}

if(formulario.txtinfo_Nombre_Taller.value=='')
{
alert('Nombre del taller');
formulario.txtinfo_Nombre_Taller.focus();
return false;
}

if(formulario.txtinfo_Descripcion_taller.value=='')
{
alert('Descripcion del taller  ');
formulario.txtinfo_Descripcion_taller.focus();
formulario.txtinfo_Descripcion_taller.value='';
return false;
}

if(formulario.cmbtutor.value=='')
{
alert('Sr Usuario debe seleccionar una taller');
formulario.cmbtutor.focus();
return false;
}

return true;
}
if(formulario.txtinf_Salon.value=='')
{
alert('Nombre del salon ');
formulario.txtinf_Salon.focus();
return false;
}

if(formulario.txtinf_Horario.value=='')
{
alert('Horario del taller');
formulario.txtinf_Horario.focus();
return false;
}




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
        <input name="txtId_Taller" type="text" id="txtId_Taller" size=15/>
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