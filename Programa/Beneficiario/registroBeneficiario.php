<<?php include("conexion.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  
    <script>
      @import url("https://fonts.googleapis.com/css?family=Lato");
html,
body {
  height: 100%;
  margin: 0;
  font-family: Lato, sans-serif;
  background-color:     #E1E2E1;  
}
header{
background: #1488CC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */   
}

.card-header{
background: #1488CC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */   
color:white;
}
    function validar(formulario) {

        if (formulario.txtcodigo.value == '') {
            alert('Sr Usuario debe ingresar el codigo');
            formulario.txtcodigo.focus();
            return false;
        }

        if (isNaN(formulario.txtcodigo.value)) {
            alert("El codigo ingresado no es un n�mero");
            formulario.txtcodigo.focus();
            formulario.txtcodigo.value = '';
            return false;
        }

        if (formulario.txtBen_Nombres.value == '') {
            alert('Sr Usuario debe ingresar los nombres');
            formulario.txtInf_informeacademico.focus();
            return false;
        }

        if (formulario.txtBen_Apellidos.value == '') {
            alert('Sr Usuario debe ingresar los apellidos ');
            formulario.txtInf_grado.focus();
            formulario.txtInf_grado.value = '';
            return false;
        }

        if (formulario.txtBen_FechaNacimiento.value == '') {
            alert('Sr Usuario debe ingresar la fecha de nacimiento');
            formulario.txtBen_FechaNacimiento.focus();
            formulario.txtBen_FechaNacimiento.value = '';
            return false;
        }

        if (formulario.txtBen_Edad.value == '') {
            alert('Sr Usuario debe ingresar la edad ');
            formulario.txtBen_Edad.focus();
            formulario.txtBen_Edad.value = '';
            return false;
        }

        if (formulario.cmbrh.value == '') {
            alert('Sr Usuario debe seleccionar el rh');
            formulario.cmbrh.focus();
            return false;
        }

        return true;
    }

    if (formulario.txtBen_Telefono.value == '') {
        alert('Sr Usuario debe ingresar el telefono');
        formulario.txtBen_Telefono.focus();
        return false;
    }

    if (formulario.txtBene_direccion.value == '') {
        alert('Sr Usuario debe ingresar la direccion ');
        formulario.txtBene_direccion.focus();
        formulario.txtBene_direccion.value = '';
        return false;
    }

    if (formulario.txtBen_Barrio.value == '') {
        alert('Sr Usuario debe ingresar el barrio');
        formulario.txtBen_Barrio.focus();
        formulario.txtBen_Barrio.value = '';
        return false;
    }

    if (formulario.txtBen_Discapacidad.value == '') {
        alert('Sr Usuario debe ingresar la discapacidad si tiene o poner no ');
        formulario.txtBen_Discapacidad.focus();
        formulario.txtBen_Discapacidad.value = '';
        return false;
    }

    if (formulario.txtBen_Alergias.value == '') {
        alert('Sr Usuario debe ingresar la alergia si tiene o poner no ');
        formulario.txtBen_Alergias.focus();
        formulario.txtBen_Alergias.value = '';
        return false;
    }

    if (formulario.txtBen_Desplazado.value == '') {
        alert('Sr Usuario debe ingresar si es desplazado o poner no');
        formulario.txtBen_Desplazado.focus();
        return false;
    }

    if (formulario.cmbzapatos.value == '') {
        alert('Sr Usuario debe seleccionar la talla de zapatos');
        formulario.cmbzapatos.focus();
        return false;
    }

    return true;


    if (formulario.cmbcamisa.value == '') {
        alert('Sr Usuario debe seleccionar la talla de camisas');
        formulario.cmbcamisa.focus();
        return false;
    }

    return true;


    if (formulario.cmbpantalon.value == '') {
        alert('Sr Usuario debe seleccionar la talla de pantalon');
        formulario.cmbpantalon.focus();
        return false;
    }

    return true;


    if (formulario.cmbdepartamento.value == '') {
        alert('Sr Usuario debe seleccionar el departamento');
        formulario.cmbdepartamento.focus();
        return false;
    }

    return true;


    if (formulario.cmbacudiente.value == '') {
        alert('Sr Usuario debe seleccionar el acudiente');
        formulario.cmbacudiente.focus();
        return false;
    }

    return true;


    if (formulario.cmbinformacionacademica.value == '') {
        alert('Sr Usuario debe seleccionar la informacion academica');
        formulario.cmbinformacionacademica.focus();
        return false;
    }

    return true;


    if (formulario.cmbEPS.value == '') {
        alert('Sr Usuario debe seleccionar la eps');
        formulario.cmbEPS.focus();
        return false;
    }

    return true;


    if (formulario.cmbcolegio.value == '') {
        alert('Sr Usuario debe seleccionar el colegio');
        formulario.cmbcolegio.focus();
        return false;
    }

    return true;
    </script>
    <title>Registro Beneficiario</title>
</head>

<body>
<center> <img src="img2.jpg"></center> 
    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                <center>  <i> <h1> <div class="card-header">FORMULARIO REGISTRO BENEFICIARIO</div><h1></i></center> 
                    <div class="card-body">
                        <form id="form1" action="grabarbeneficiario.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo</label>
                                    <input name="txtcodigo" type="text" class="form-control" id="txtcodigo" size=18
                                        placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nombre">Nombres</label>
                                    <input name="txtBen_Nombres" type="text" class="form-control" id="txtBen_Nombres"
                                        placeholder="Nombres completos" size=20 value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="apellido">Apellidos</label>
                                    <input name="txtBen_Apellidos" type="text" class="form-control"
                                        id="txtBen_Apellidos" placeholder="Apellidos completos" size=20 value=""
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="fecha">Fecha de nacimiento</label>
                                    <input name="txtBen_FechaNacimiento" type="date" class="form-control"
                                        id="txtBen_FechaNacimiento" placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="edad">Edad</label>
                                    <input name="txtBen_Edad" type="text" class="form-control" id="txtBen_Edad" size=2
                                        placeholder="Edad" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <br>
                                    <br> 
                                    <br>
                                <div class="col-md-4 mb-3">
                                    <label for="genero">Genero</label>
                                    <br>
                                    <select class="txtBen_Genero" aria-label=".txtBen_Genero">
                                    
                                  <option selected>Seleccione una Opción</option>
                                    <option value="1">MASCULINO</option>
                                    <option value="2">FEMENINO</option>
                                    <option value="3">COMUNIDAD LGTBI</option>
                                  </select>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="rh">RH</label>
                                    <?php
 
  $query="SELECT Id_Rh, rh_Descripcion FROM rh";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbrh'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	

  
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="telefono">Telefono</label>
                                    <input name="txtBen_Telefono" type="text" class="form-control" id="txtBen_Telefono"
                                        size=10 placeholder=" " required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="direccion">Direccion</label>
                                    <input name="txtBene_direccion" type="text" class="form-control"
                                        id="txtBene_direccion" size=30 placeholder=" Kra , Calle , Diag ,etc" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="direccion">Barrio</label>
                                    <input name="txtBen_Barrio" type="text" class="form-control" id="txtBen_Barrio"
                                        size=30 placeholder="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="discapacidad">Discapacidad</label>
                                    <input name="txtBen_Discapacidad" type="text" class="form-control"
                                        id="txtBen_Discapacidad" size=10 placeholder="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="alergias">Alergias</label>
                                    <input name="txtBen_Alergias" type="text" class="form-control" id="txtBen_Alergias"
                                        size=20 placeholder="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="desplazado">Desplazado</label>
                                    <input name="txtBen_Desplazado" type="text" class="form-control"
                                        id="txtBen_Desplazado" size=20 placeholder=" si o no " required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nacionalidad">Nacionalidad</label>
                                    <input name="txtBen_Nacionalidad" type="text" class="form-control"
                                        id="txtBen_Nacionalidad" size=20 placeholder="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="tallaZapatos">Tallas zapatos</label>
                                    <?php
  
  $query="SELECT Id_Zapatos, Descripcion FROM zapatos";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbzapatos'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
   echo"<br>";
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="TallaCamisas">Talla Camisas</label>
                                    <?php

  $query="SELECT Id_camisa, Talla_camisa FROM camisa";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo "";
  echo"<br>";
  echo "<select name='cmbcamisa'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="TallaPantalon">Talla Pantalon</label>
                                    <?php
 
  $query="SELECT Id_Pantalon, talla_pantalon FROM pantalon";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
    echo "<select name='cmbpantalon'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="Departamento">Departamento</label>
                                    <?php
 
  $query="SELECT `Id_Departamento`, `Dep_NomDepartamento` FROM `departamento`";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbdepartamento'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="Acudiente">Acudiente</label>
                                    <?php
  
  $query="SELECT Id_Acudiente, Acu_nombreacudiente FROM acudiente";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbacudiente'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="InformacionAcademica">Informacion Academica</label>
                                    <?php
  
  $query="SELECT `Id_InformacionAcademica`, `Inf_Enfasisacademico` FROM `informacion_academica`";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbinformacionacademica'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="EPS">EPS</label>
                                    <?php
  
  $query="SELECT Id_Eps, Eps_nombre FROM eps";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbEPS'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="colegio">Colegio</label>
                                    <?php
 
  $query="SELECT Id_Colegio, Col_Nombre FROM colegio";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbcolegio'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="Submit" value="Enviar">Enviar</button>
                                <br>
                                <br>
                                <button class="btn btn-primary" type="reset" name="Submit2" value="Restablecer">Restablecer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script src="codigo.js"></script>
</body>

</html>