<?php
include("conexion.php");
/*  Este software se hizo para el resultado de aprendizaje CRUD 
   Elaboro:  Víctor J. Rodríguez P.
   Para que entiendan como se actualiza, borra, inserta, en una base de datos en Xampp 
   Se deben tener concentos claros ya de Php, mysql, html, css, java script  */
	$Numerop=$_GET['codigo'];
	//return $Numerop;
	$query="SELECT * FROM acudiente WHERE Id_Acudiente  = '".$Numerop."'";

	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result)>0)
	{
		
		while($Rs=mysqli_fetch_array($result))
		{
			?>
			<head>
			<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">

    <script>
    @import url("https://fonts.googleapis.com/css?family=Lato");
    html,
    body {
        height: 100 % ;
        margin: 0;
        font - family: Lato,
        sans - serif;
        background - color: #E1E2E1;
    }
    header {
        background: #1488CC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, # 2 B32B2,
        #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, # 2 B32B2,
        #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */   
}

.card-header{
background: # 1488 CC; /* fallback for old browsers */
        background: -webkit - linear - gradient(to right, #2B32B2, # 1488 CC); /* Chrome 10-25, Safari 5.1-6 */
        background: linear - gradient(to right,
        #2B32B2, # 1488 CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: white;

    }
			</head>
			<title>Registro acudiente</title>


<body>
    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <center>
                        <div class="card-header">Eliminar Acudiente</div>
                    </center>
                    <div class="card-body">
                        <form id="form1" action="grabaractualizaracudiente.php" method="post" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="codigo">Codigo</label>
                                    <input name="txtcodigo" type="text" class="form-control" id="txtcodigo" size=18
                                        placeholder="" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nombre">Nombres</label>
                                    <input name="txtAcu_nombreacudiente" type="text" class="form-control"
                                        id="txtAcu_nombreacudiente" placeholder="Nombres" size=20 value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="apellidos">Apellidos</label>
                                    <input name="txtAcu_apellidoacudiente" type="text" class="form-control"
                                        id="txtAcu_apellidoacudiente" placeholder="Apellidos" size=20 value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="documento">Tipo de documento</label>
                                    <input name="txtAcu_tipodocumento" type="text" class="form-control"
                                        id="txtAcu_tipodocumento" placeholder="C.C" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="edad">Edad</label>
                                    <input name="txtAcu_edad" type="text" class="form-control" id="txtAcu_edad" size=10
                                        placeholder=" " required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="Telefono">Telefono</label>
                                    <input name="txtAcu_telefono" type="text" class="form-control" id="txtAcu_telefono"
                                        size=30 placeholder=" " required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="direccion">Acu_direccion</label>
                                    <input name="txtAcu_direccion" type="text" class="form-control"
                                        id="txtAcu_direccion" size=30 placeholder="Kra , Calle , Diag ,etc" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="barrio">Barrio</label>
                                    <input name="txtAcu_barrio" type="text" class="form-control" id="txtAcu_barrio"
                                        size=10 placeholder="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="correo">correo electronico</label>
                                    <input name="txtAcu_correoelectronico" type="text" class="form-control"
                                        id="txtAcu_correoelectronico" size=20 placeholder="" required>
                                    <div class="valid-feedback">¡Ok válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="estadoeco">estado socioeconomico</label>
                                        <?php
 
 $query="SELECT `Id_Socioeconomico`, `Soc_Beneficiario` FROM `estadosocioeconomico` ";
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
                                    <div>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                        <button class="btn btn-primary" type="submit" name="Submit"
                                            value="Enviar">Guardar</button>
                                    </div>

                                    <br>
                                    <div>
                                    <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                        <button class="btn btn-primary" type="reset" name="Submit2"
                                            value="Restablecer">Restablecer</button>
                                    </div>
                                    </td>
                                    </tr>

                                    </center>



</body>

</html>
					
				<input type="hidden" name="Accion" value="Delete" />
				
			</form>
			</center>
			<?php
		}
	}
	mysqli_close($link);
?>