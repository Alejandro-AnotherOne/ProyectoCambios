<?php include("conexion.php"); ?>
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
  
    </script>
    <title>Registro inicio taller</title> 
</head>

<body>
    <br>
    <br>
<center>
<img src="creacion.png"  width="1000"
     height="400">
    <header style="height: 10px"></center>

    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                   <center> <div class="card-header">Formulario de Registro Taller</div> </center>
                    <div class="card-body">
                        <form id="form1" action="grabarInformacioTaller.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo</label>
                                    <input name="Id_Ini_Taller" type="text" class="form-control" id="Id_Ini_Taller" size=18
                                        placeholder="" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="Des_taller">Descripcion taller</label>
                                    <?php
 
  $query="SELECT `Id_Desc_taller`, `Des_Nombre_taller`, `Desc_info_talle_intensidad`, `Desc_Info_Taller` FROM `descripcion_taller` ";
  $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbDes_taller'>";
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
                                    <label for="Fecha">Fecha de Inicio</label>
                                    <input name="txtIni_fecha_inicio" type="date" class="form-control"
                                        id="txtIni_fecha_inicio" placeholder="" size=20 value=""
                                        required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="fecha">Fecha fin</label>
                                    <input name="txtIni_Fecha_fin" type="date"  class="form-control"
                                        id="txtIni_Fecha_fin" placeholder="" value="" required>
                                        <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="edad">Dias Asignados</label>
                                    <br>
                                    <select class="txtIni_Dias_taller" aria-label="txtIni_Dias_taller">
                                    
                                  <option selected>Seleccione una Opción</option>
                                    <option value="1">Lunes-Miercoles</option>
                                    <option value="2">Martes-Jueves</option>
                                    <option value="3">Miercoles-Viernes </option>
                                    <option value="3">Sabados </option>
                                  </select>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                    <label for="edad">jornada</label>
                                    <br>
                                    <select class="txtIni_Jornada" aria-label="txtIni_Jornada">
                                    
                                  <option selected>Seleccione una Opción</option>
                                    <option value="1">Jornada Mañana</option>
                                    <option value="2">Jornada Tarde</option>
                                    <option value="3">Fines de semana (Sabados) </option>
                                  </select>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="tutor">Nombre Tutor</label>
                                    <?php
   $query="select Id_Tutor, Tut_Nombretutor  from tutor";
   $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  
   echo "<select name='cmbtutor'>";
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
                                <br>
                                
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