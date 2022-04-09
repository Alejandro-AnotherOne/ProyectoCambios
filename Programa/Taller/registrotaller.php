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
                <center>  <i> <h1> <div class="card-header">FORMULARIO REGISTRO TALLER</div><h1></i></center> 
                    <div class="card-body">
                        <form id="form1" action="grabarInformacioTaller.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo</label>
                                    <input name="txtId_Ini_Taller" type="text" class="form-control" id="txtId_Ini_Taller" size=18
                                        placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nombre">Nombres o Descripcion del talller</label>
                                    <input name="txtIni_des_taller" type="text" class="form-control" id="txtIni_des_taller"
                                        placeholder="Nombres o Descripcion" size=20 value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="apellido">Fecha Inicio Taller</label>
                                    <input name="txtIni_fecha_inicio" type="date" class="form-control"
                                        id="txtIni_fecha_inicio" placeholder="" size=20 value=""
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="fecha">Fecha de Fin Taller</label>
                                    <input name="txtIni_Fecha_fin" type="date" class="form-control"
                                        id="txtIni_Fecha_fin" placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="intensidad">Intensidad Horaria en Numero.</label>
                                    <input name="txtIni_Intensidad" type="text" class="form-control" id="txtIni_Intensidad" size=15
                                        placeholder="Edad" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <br>
                                    <br> 
                                    <br>
                                <div class="col-md-4 mb-3">
                                    <label for="dias">Días Asignados para el Taller </label>
                                    <br>
                                    <select class="txIni_Dias_taller" id="txIni_Dias_taller"  name="txIni_Dias_taller" aria-label="txIni_Dias_taller">
                                    
                                  <option selected>Seleccione una Opción</option>
                                    <option value="1">Lunes-Miercoles</option>
                                    <option value="2">Martes-Jueves</option>
                                    <option value="3">Miércoles-Viernes</option>
                                  </select>
                                  <option value="4">Sabado</option>
                                  </select>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <br>
                                    <br> 
                                    <br>
                            <div class="col-md-4 mb-3">
                                    <label for="jornada">Asignacion de la jornada</label>
                                    <br>
                                    <select class="txtIni_jornada" id="txtIni_jornada" name="txtIni_jornada" 
                                    aria-label=".txtIni_jornada">
                                    
                                  <option selected>Seleccione una Opción</option>
                                    <option value="1">JORNADA MAÑANA</option>
                                    <option value="2">JORNADA TARDE</option>
                                                                      </select>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="tutor">tutor</label>
                                    <?php
 
  /*$query="SELECT `Id_Tutor`, `Tut_Nombretutor`, `Tut_Apellidotutor`,  `Tut_nivelescolar_prof` FROM `tutor`";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbrh'>";
   echo  "<option selected value=0> --Seleccione una opcion-- </option>";
  
  while($row=mysqli_fetch_array($result))
  {
                  echo  "<option value=$row[0]> $row[1] </option>";
              }
      
  echo "</select>";	*/

  
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                
                                <td>
                                <div>
                                <Section>
                                <br> <br> <br>
                                <button class="btn btn-primary" type="submit" name="Submit" value="Enviar">Enviar</button>
                                </Section>
                              </div>
                             
<br>
                              <div>
                              <br> <br> <br>
                                <button class="btn btn-primary" type="reset" name="Submit2" value="Restablecer">Restablecer</button>
                              </div>
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