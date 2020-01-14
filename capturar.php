<?php

require "controlDB.php";

$funcion = $_REQUEST["funcion"];

$parametro = $_GET["parametro"];

if($funcion!="eliminar"){
$cod = $_POST["cod"];

$cedula = $_POST["numcedula"];
$nombres = $_POST["txtnombres"];
$apellidos = $_POST["txtapellidos"];
$direccion = $_POST["txtdireccion"];
$barrio = $_POST["txtbarrio"];
$estrato = $_POST["numestrato"];
$departamento = $_POST["txtdepartamento"];
$ciudad = $_POST["txtciudad"];
$estado = $_POST["txtestado"];
$telefono = $_POST["usrtel"];
$celular = $_POST["usrcelular"];
$email = $_POST["emailaddress"];
$observacion = $_POST["txtobservacion"];
}

$obj = new controlDB();


if($funcion=="modificar"){
    $sql="update usuarios set CedulaID='$cedula', Nombres='$nombres', Apellidos='$apellidos', Direccion='$direccion', Barrio='$barrio', Estrato='$estrato', Departamento='$departamento', Ciudad='$ciudad', Estado='$estado', Fijo='$fijo', Celular='$celular', Email='$email', Observacion='$observacion' where CedulaID=$cod";
    
}else if($funcion=="eliminar"){
    $sql="delete from usuarios where CedulaID='$parametro'";
}
else{
$sql="insert into usuarios(CedulaID, Nombres, Apellidos, Direccion, Barrio, Estrato, Departamento, Ciudad, Estado, Fijo, Celular, Email, Observacion) values ('$cedula','$nombres','$apellidos','$direccion','$barrio','$estrato','$departamento','$ciudad','$estado','$fijo','$celular','$email','$observacion')";
}
$obj->actualizar($sql);
header("location: listado.php?z=lista");
?>