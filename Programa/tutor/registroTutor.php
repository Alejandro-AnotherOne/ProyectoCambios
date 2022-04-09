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
function validar(formulario)
{

if(formulario.txtId_Tutor.value=='')
{
alert('Sr Usuario debe ingresar el codigo');
formulario.txtId_Tutor.focus();
return false;
}

if (isNaN(formulario.txtId_Tutor.value))
{
alert("El codigo ingresado no es un n�mero");
formulario.txtId_Tutor.focus();
formulario.txtId_Tutor.value='';
return false;
}

if(formulario.txtTut_Nombretutor.value=='')
{
alert('Debe ingresar el Nombre');
formulario.txtTut_Nombretutor.focus();
return false;
}

if(formulario.txtTut_Apellidotutor.value=='')
{
alert('Debe ingresar el Apellido');
formulario.txtTut_Apellidotutor.focus();
return false;
}

if(formulario.txtTut_tipodedocumento.value=='')
{
alert('Debe ingresar el tipo de documento');
formulario.txtTut_tipodedocumento.focus();
return false;
}

if(formulario.txtTut_Documento.value=='')
{
alert('Debe ingresar el documento');
formulario.txtTut_Documento.focus();
formulario.txtTut_Documento.value='';
return false;
}

if(formulario.txtTut_Direccion.value=='')
{
alert('Debe ingresar la Direccion');
formulario.txtTut_Direccion.focus();
return false;
}

if(formulario.txtTut_Telefono.value=='')
{
alert('Debe ingresar un telefono');
formulario.txtTut_Telefono.focus();
formulario.txtTut_Telefono.value='';
return false;
}



if(formulario.txtTut_nivelescolar_prof.value==0)
{
alert('Debe ingresar el nivel academico que tiene');
formulario.txtTut_nivelescolar_prof.focus();
return false;
}

return true;
}



if(formulario.cmbrefuerzo.value==0)
{
alert(' Debe seleccionar el refuerzo');
formulario.cmbrefuerzo.focus();
return false;
}

return true;
    </script>
    <title>Registro Tutor</title>
</head>

<body>
<form id="form1" name="form1" method=post onsubmit="return validar(this)" action="grabarTutor.php">


<body>
    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                   <center> <div class="card-header">Formulario de Registro Tutor</div>  </center>
                    <div class="card-body">
                        <form id="form1" action="grabartutor.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo Tutor</label>
                                    <input name="txtId_Tutor" type="text" class="form-control" id="txtId_Tutor" size=18
                                        placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nombre">Nombres</label>
                                    <input name="txtTut_Nombretutor" type="text" class="form-control" id="txtTut_Nombretutor"
                                        placeholder="Nombres" size=20 value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="apellido">Apellidos</label>
                                    <input name="txtTut_Apellidotutor" type="text" class="form-control"
                                        id="txtTut_Apellidotutor" placeholder="Apellidos" size=20 value=""
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="tipodedocumento">Tipo de documento</label>
                                    <input name="txtTut_tipodedocumento" type="text" class="form-control"
                                        id="txtTut_tipodedocumento" placeholder="C.C" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="Direccion">Direccion</label>
                                    <input name="txtTut_Direccion" type="text" class="form-control"
                                         id="txtTut_Direccion"   placeholder="Kra , Calle , Diag ,etc" value=" " required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <br>
                                    <br> 
                                    <br>
                                    <div class="col-md-4 mb-3">
                                    <label for="Telefono">Telefono</label>
                                    <input name="txtTut_Telefono" type="text" class="form-control" id="txtTut_Direccion" size=2
                                        placeholder="" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                
                                    <br>
                                    <div class="col-md-4 mb-3">
                                    <label for="Telefono">nivel escolar profesional </label>
                                    <input name="txtTut_nivelescolar_prof" type="text" class="form-control" id="Tut_nivelescolar_prof" size=50
                                        placeholder="Profesional" value="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>

                                    <?php
 

  
  ?>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                
                                <button class="btn btn-primary" type="submit" name="Submit" value="Enviar">Enviar</button>                                
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
</body>
</html>
