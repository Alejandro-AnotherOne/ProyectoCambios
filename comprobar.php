<?php
$loginUser=$_POST["txtlogin"];
$loginPassw=$_POST["txtclave"];

if($loginUser=="Administrador" && $loginPassw=="12345")
{
header('Location: indexAdmi.html');
}
elseif ( $loginUser=="usuario" && $loginPassw=="54321") 
{
header('Location: indexUser.html');
}
else
{
echo "<script> alert('Error al ingresar')</script>";
}

?>