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

<title>Registroentregaayuda</title>

<body>
    <center>
<img src="discapacidad.jpg"   width="650"
     height="450">
    <header style="height: 0px"> </center>
    
  

    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                <center>  <div class="card-header">Registro Ayudas</div>
                    <div class="card-body">
                        <form id="form1" action="grabarentregaAyuda.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo</label>
                                    <input name="txtcodigo" type="text" class="form-control" id="txtcodigo" size=18
                                        placeholder="" value="" required>
                                </div>
                                <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="idbeneficiario">Codigo del beneficiario</label>
                                    <?php
 
$query="SELECT `Id_Beneficiario`, `Ben_Nombres`, `Ben_Apellidos` FROM `beneficiario` ";
$result=mysqli_query($link,$query) or die ("error en la consulta de programa");
  echo"<br>";
  echo "<select name='cmbbeneficiario'>";
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
                                    <label for="edad">Nombre de la ayuda</label>
                                    <br>
                                    <select class="txtAyuda_Nombre" aria-label=".txtAyuda_Nombre">
                                    
                                  <option selected>Seleccione una Opción</option>
                                    <option value="1">Economica</option>
                                    <option value="2">Alimentario</option>
                                    <option value="3">Vestuario</option>
                                  </select>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                            </div>
                                <div class="col-md-4 mb-3">
                                    <label for="Fecha de entrega">Fecha de entrega</label>
                                    <input name="txtFecha_entrega" type="date" class="form-control" id="txtFecha_entrega"
                                        size=10 placeholder=" " required>
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
