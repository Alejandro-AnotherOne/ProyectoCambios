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
            formulario.txtInf_Enfasisacademico.focus();
            return false;
        }

        if (formulario.txtBen_Apellidos.value == '') {
            alert('Sr Usuario debe ingresar los apellidos ');
            formulario.txtInf_grado.focus();
            
            return false;
        }
1
        if (formulario.txtBen_FechaNacimiento.value == '') {
            alert('Sr Usuario debe ingresar la fecha de nacimiento');
            formulario.Inf_colegio.focus();
            return false;
        }

        if (formulario.txtBen_Edad.value == '') {
            alert('Sr Usuario debe ingresar la edad ');
            formulario.inf_sede.focus();
            return false;
        }

        if (formulario.cmbrh.value == '') {
            alert('Sr Usuario debe seleccionar el rh');
            formulario.Inf_nombresede.focus();
            return false;
        }

        return true;
    }

    if (formulario.txtBen_Telefono.value == '') {
        alert('Sr Usuario debe ingresar el telefono');
        formulario.Id_Taller.focus();
        return false;
    }

    

    return true;
    </script>
    <center> <img src="IMG1.jpg"></center> 
    <title>Registro Beneficiario</title>
</head>

<body>

    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                <center>  <i> <h1> <div class="card-header">FORMULARIO REGISTRO INFORMACION ACADEMICA</div><h1></i></center> 
                    <div class="card-body">
                        <form id="form1" action="grabarInformacionAcademica.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo</label>
                                    <input name="txtcodigo" type="text" class="form-control" id="txtcodigo" size=18
                                        placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="enfasis">ENFASIS ACADEMICO</label>
                                    <input name="txtInf_Enfasisacademico" type="text" class="form-control" id="txtInf_Enfasisacademico "
                                        placeholder="Enfasis Academico" size=20 value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="grado">GRADO</label>
                                    <input name="txtInf_grado" type="text" class="form-control"
                                        id="txtInf_grado" placeholder="Grado academico" size=20 value=""
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="colegio">INFORMACION COLEGIO</label>
                                    <input name="txtInf_colegio" type="text" class="form-control"
                                        id="txtInf_colegio" placeholder="iNFORMACION Colegio Actual" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="sede">SEDE ACADEMICA</label>
                                    <input name="txtinf_sede" type="text" class="form-control" id="txtinf_sede" size=2
                                        placeholder="Sede Colegio" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="colegio">NOMBRE DE SEDE / COLEGIO</label>
                                    <input name="txtInf_nombresede" type="text" class="form-control"
                                        id="txtInf_nombresede" placeholder="Nombre del Colegio Actual" value="" required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="TallaCamisas">CODIGO TALLER</label>
                                    <?php

            $query="SELECT `Id_Desc_taller`, `Des_Nombre_taller`, `Desc_info_talle_intensidad` FROM `descripcion_taller`";
            $result=mysqli_query($link,$query) or die ("error en la consulta de programa");
            echo "";
            echo"<br>";
            echo "<select name='cmbdesctaller'>";
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
                                    <br> 
                                    <br>
                                    <?php
     

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