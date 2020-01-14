<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Datos</title>
    <?php include("menu.php"); ?>
</head>
<body>
    <?php
    $cod=$_GET["parametro"];

    require "controlDB.php";

    $obj = new controlDB();

    $data=$obj->consultar("select * from usuarios where CedulaID=$cod");

    ?>

    <h2>Modificar datos</h2>
    <hr />
    <form action="capturar.php" method="post">
    <table width="200" border="0">
    <?php foreach ($data as $fila) {?>
        <tr>
            <th scope="row">Cedula</th>
            <td><input type="text" name="numcedula" minlength="10" maxlength="10" pattern="[0-9]+" required value="<?php echo $fila["CedulaID"]; ?>"></td>
        </tr>
        <tr>
            <th scope="row">Nombres</th>
            <td><input type="text" name="txtnombres" value="<?php echo $fila["Nombres"]; ?>"></td>
        </tr>
        <tr>
            <th scope="row">Apellidos</th>
            <td><input type="text" name="txtapellidos" value="<?php echo $fila["Apellidos"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Direccion</th>
            <td><input type="text" name="txtdireccion" value="<?php echo $fila["Direccion"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Barrio</th>
            <td><input type="text" name="txtbarrio" value="<?php echo $fila["Barrio"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Estrato</th>
            <td><input type="text" name="numestrato" minlength="1" maxlength="1" pattern="[0-9]+" required value="<?php echo $fila["Estrato"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Departamento</th>
            <td><input type="text" name="txtdepartamento" value="<?php echo $fila["Departamento"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Ciudad</th>
            <td><input type="text" name="txtciudad" value="<?php echo $fila["Ciudad"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Estado</th>
            <td><select name="txtestado">
                <option value="propietario">Propietario</option>
                <option value="arrendatario">Arrendatario</option>
                </select>
            </td>
        </tr>
        <tr>
            <th scope="row">Fijo</th>
            <td><input type="tel" name="usrtel" minlength="7" maxlength="7" pattern="[0-9]+" required value="<?php echo $fila["Fijo"]; ?>"/></td>
        </tr>
        <tr>
            <th scope="row">Celular</th>
            <td><input type="tel" name="usrcelular" minlength="10" maxlength="10" pattern="[0-9]+" required value="<?php echo $fila["Celular"]; ?>" /></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><input type="email" name="emailaddress" value="<?php echo $fila["Email"]; ?>"></td>
        </tr>
        <tr>
            <th scope="row">Observacion</th>
            <td><input type="text" name="txtobservacion" value="<?php echo $fila["Observacion"]; ?>"/></td>
        </tr>
        <tr>
            <td colspan= "2" align="Center"><input type="submit" value="GUARDAR" /></td>
        </tr>
    <?php } ?>
    </table>  
    <input type = "hidden" name="funcion" value="modificar" />
    <input type = "hidden" name="cod" value="<?php echo $fila["CedulaID"]; ?>" />
    </form>
</body>
</html>