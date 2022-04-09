<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Este software se hizo para el resultado de aprendizaje CRUD 
Elaboro:  Víctor J. Rodríguez P.
Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
Se deben tener concentos claros ya de Php, mysql, html, css, java script  aquinse aplican todos-->

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Registro de informacion academico</title>
  <link rel="stylesheet" href="styles.css">
  <style>
     body {
    height: 100vh;
    background-color: hsl(199, 100%, 50%);
    color: #fff;
    background-position: center;
    justify-content: center;
}
    </style>

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


if(formulario.txtBen_Genero.value=='')
{
alert('Sr Usuario Seleccione El Genero ');
formulario.txtBen_Genero.focus();
formulario.txtBen_Genero.value='';
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

<h1 ALIGN=CENTER>FORMULARIO </h1>

</head>

<h2 ALIGN=CENTER>ENTRA DE DATOS</h2>


<body>
   <!--==========================
  FORMULARIO
============================-->

  <center>
  

<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarbeneficiario.php">


  <table width="500" border="3">
    <tr>
      <td width=1000%>CODIGO</td>
      <td>
        <input name="txtcodigo" type="text" id="txtcodigo"placeholder="N° Documento de Identidad" size=20/>
      </td>
    </tr>
    <tr>
      <td>nombres </td>
      <td>
        <input name="txtBen_Nombres" type="text" id="txtBen_Nombres" placeholder=" nombres completos"  size=20/>
      </td>
    </tr>
    <tr>
      <td>Apellidos </td>
      <td>
        <input name="txtBen_Apellidos" type="text" id="txtBen_Apellidos" placeholder=" apellidos completos"  size=20/>
      </td>
    </tr>
	<tr>
      <td>Fecha Nacimiento</td>
      <td>
        <input name="txtBen_FechaNacimiento" type="date" id="txtBen_FechaNacimiento" />
      </td>
    </tr>
	<tr>
      <td>Edad</td>

        <td>

        <input name="txtBen_Edad" type="text" id="txtBen_Edad"   placeholder="N°__" size=2/>
      </td>
    </tr>
    <tr>
    <td >Genero:<td>
    <select class="txtBen_Genero" multiple aria-label="txtBen_Genero"size=1>
  <option selected>Seleccione una Opción</option>
  <option value="1">MASCULINO</option>
  <option value="2">FEMENINO</option>
  <option value="3">COMUNIDAD LGTBI</option>
</select>
</td>
      
     
	<tr>
  <tr>
    <td>RH</td>
    <td> 
      <?php
  include("conexion.php");
  $query="SELECT `Id_Rh`, `rh_Descripcion` FROM `rh` ";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbrh'>";
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
        <input name="txtBen_Telefono" type="text" id="txtBen_Telefono"  placeholder="301752..." size=10/>
      </td>
    </tr>
    <tr>
    <tr>
      <td>direccion</td>
      <td>
        <input name="txtBene_direccion" type="text" id="txtBene_direccion"  placeholder="Av 35# 45..." size=30/>
      </td>
    </tr>
    <tr>
    <tr>
      <td>barrio</td>
      <td>
        <input name="txtBen_Barrio" type="text" id="txtBen_Barrio"  placeholder="Su Barrio"size=30/>
      </td>
    </tr>
    <tr>
    <td >Discapacidad:<td>
      <select name="txtBen_Discapacidad" type="text" id="txtBen_Discapacidad"    size=1/>
            <option>Si</option>
            <option>No</option>
          

      </td>
    </tr>
    <tr>
      <td>alergias</td>
      <td>
        <input name="txtBen_Alergias" type="text" id="txtBen_Alergias"  placeholder="Cual?" size=20/>
      </td>
    </tr>
    <tr>
    <tr>
      <td >desplazado:<td>
      <select name="txtBen_Desplazado" type="text" id="txtBen_Desplazado" size=1/>
            <option>Si</option>
            <option>No</option>
        </select>
      </td>
     </td>
     </tr>
     <tr>
    <td>Tallas zapatos </td>
    <td> 
      <?php
  include("conexion.php");
  $query="SELECT Id_Zapatos, Descripcion FROM zapatos";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbzapatos'>";
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
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbcamisa'>";
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
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbpantalon'>";
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
  $query="SELECT `Id_Departamento`, `Dep_NomDepartamento` FROM departamento";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbdepartamento'>";
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
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbacudiente'>";
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
  $query="SELECT Id_InformacionAcademica, Inf_Enfasisacademico FROM informacion_academica";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbinformacionacademica'>";
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
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbEPS'>";
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
  
  echo "<select class= form-select size= 1 aria-label= size 3 select example name='cmbcolegio'>";
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
