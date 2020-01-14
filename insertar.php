<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSERTAR DATOS</title>
    <?php include("menu.php"); ?>
</head>
<body>
    <h2>Insertar registros</h2>
    <form action="capturar.php" method="post">
    <table width="200" border="0">
        <tr>
            <th scope="row">Cedula</th>
            <td><input type="text" name="numcedula" minlength="10" maxlength="10" pattern="[0-9]+" required></td>
        </tr>
        <tr>
            <th scope="row">Nombres</th>
            <td><input type="text" name="txtnombres" /></td>
        </tr>
        <tr>
            <th scope="row">Apellidos</th>
            <td><input type="text" name="txtapellidos" /></td>
        </tr>
        <tr>
            <th scope="row">Direccion</th>
            <td><input type="text" name="txtdireccion" /></td>
        </tr>
        <tr>
            <th scope="row">Barrio</th>
            <td><input type="text" name="txtbarrio" /></td>
        </tr>
        <tr>
            <th scope="row">Estrato</th>
            <td><input type="text" name="numestrato" minlength="1" maxlength="1" pattern="[0-9]+" required></td>
        </tr>
        <tr>
            <th scope="row">Departamento</th>
            <td><input type="text" name="txtdepartamento" /></td>
        </tr>
        <tr>
            <th scope="row">Ciudad</th>
            <td><input type="text" name="txtciudad" /></td>
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
            <td><input type="tel" name="usrtel" minlength="7" maxlength="7" pattern="[0-9]+" required></td>
        </tr>
        <tr>
            <th scope="row" >Celular</th>
            <td><input type="tel" name="usrcelular" minlength="10" maxlength="10" pattern="[0-9]+" required></td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td><input type="email" name="emailaddress"></td>
        </tr>
        <tr>
            <th scope="row">Observacion</th>
            <td><input type="text" name="txtobservacion" /></td>
        </tr>
        <tr>
            <td colspan= "2" align="Center"><input type="submit" value="INSERTAR" /></td>
        </tr>
    </table>  
    </form>
</body>
</html>