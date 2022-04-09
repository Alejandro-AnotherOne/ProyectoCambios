<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro de refuerzo</title>

<script>
 function calidar(formulario)
{
  if (formulario.txtId_Refuerzo.value=='') 
  {
     alert('Sr Usuario ingese el codigo'); 
     formulario.txtId_Refuerzo.focus();
     return false;
  }

  if (isNaN(formulario.txtId_Refuerzo.value=='') )
  {
     alert('Sr Usuario ingese el codigo'); 
     formulario.txtId_Refuerzo.focus();
     formulario.txtId_Refuerzo.values='';
     return false;
  }
  
  
  if (formulario.txtRef_nombre.value=='') 
  {
    alert('Sr Usuario ingese el codigo'); 
    formulario.txtId_Refuerzo.focus();
     return false;
  } 
  return false;   
}
</script>

</head>
<h1 ALIGN=CENTER>FORMULARIO </h1>
<h2 ALIGN=CENTER>ENTRADA DE DATOS DEL TUTOR</h2>


<body>

<center>

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarRefuerzo.php">


  <table width="400" border="1">
    <tr>
      <td width=50%>CODIGO</td>
      <td>
        <input name="txtcodigo" type="text" id="txtcodigo" size=18/>
      </td>
    </tr>
    <tr>
      <td>NOMBRE del refuerzo</td>
      <td>
        <input name="txtRef_nombre" type="text" id="txtRef_nombre" size=20/>
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
</form>
</center>


</body>
</html>