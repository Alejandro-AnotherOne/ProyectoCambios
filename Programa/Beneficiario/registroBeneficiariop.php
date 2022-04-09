<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../css/estiloBn.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/casa-icon.png" type="image/x-icon">
    <title>Administrador</title>
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
</head>
<body>
    <nav>
        <section id="hero">
            <div class="hero-container">
              <div class="wow fadeIn">
                <div class="hero-logo">
                  <img class="logo-Fundacion" src="img/logo fundacion.jpg" alt="FUNDACION SAN JUAN BAUTISTA" width= 10% >
                  <br>
                  <p class="titulo-logo">Fundacion San Juan Bautista</p>
                </div>
         </section>
        <ul class="cont-ul">
            <li class="develop">
                REGISTRAR  
                <ul class="ul-second">
                    <li class="front"><a href=""></a>Registro Beneficiario</li>
                    <li class="front"><a href=""></a>Registro Acudiente </li>
                    <li class="front"><a href=""></a>Registro Informacion Academica </li>
                    <li class="back"><a href=""></a>Registro Tutor</li>
                    
                   
                    <li>Full-Stack</li>
                </ul>
             <li class="develop">
                DESARROLLADOR 
                <ul class="ul-second">
                    <li class="back">Back-End</li>
                    <li class="front">
                        Front-End
                        <ul class="ul-third">
                            <li>CSS</li>
                            <li>HTML</li>
                            <li>JavaScript</li>
                        </ul>
                    </li>
                    <li>Full-Stack</li>
                </ul>
            </li>
            <li class="develop">
                DESARROLLADOR 
                <ul class="ul-second">
                    <li class="back">Back-End</li>
                    <li class="front">
                        Front-End
                        <ul class="ul-third">
                            <li>CSS</li>
                            <li>HTML</li>
                            <li>JavaScript</li>
                        </ul>
                    </li>
                    <li>Full-Stack</li>
                </ul>
            </li>
            <li>COMPANY</li>
            <li class="develop">
                DESARROLLADOR 
                <ul class="ul-second">
                    <li>Full-Stack</li>
                    <li>Full-Stack</li>
                </ul>
            </li>
            <br>
        </ul>
    </nav>

    <section>
      <main>
       
    
           <!--==========================
  FORMULARIO
============================-->
  <center>

    <form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarbeneficiario.php">
    
    
      <table width="450" border="1">
        <tr>
          <td width=50%>CODIGO</td>
          <td>
            <input name="txtcodigo" type="text" id="txtcodigo" size=18/>
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
            <input name="txtBen_Edad" type="text" id="txtBen_Edad" size=2/>
          </td>
        </tr>
        <tr>
          <td >Genero:<td>
          <select name="txtBen_Genero" type="text" id="txtBen_Genero" size=1/>
                <option>MASCULINO</option>
                <option>FEMENINO</option>
                <option>COMUNIDAD LGTBI</option>
            </select>
          </td>
         </td>
        <tr>
      <tr>
        <td>RH</td>
        <td> 
          <?php
      include("conexion.php");
      $query="SELECT `Id_Rh`, `rh_Descripcion` FROM `rh` ";
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
        <td >Discapacidad:<td>
          <select name="txtBen_Discapacidad" type="text" id="txtBen_Discapacidad" size=1/>
                <option>Si</option>
                <option>No</option>
              
    
          </td>
        </tr>
        <tr>
          <td>alergias</td>
          <td>
            <input name="txtBen_Alergias" type="text" id="txtBen_Alergias" size=20/>
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
      $query="SELECT `Id_Departamento`, `Dep_NomDepartamento` FROM departamento";
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
      $query="SELECT Id_InformacionAcademica, Inf_Enfasisacademico FROM informacion_academica";
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
    </form>
    </center>
     <!--======FORMULARIO============-->
     </main>
    </section>

</body>
</html>



