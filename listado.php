<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
    <script>
        function modificar(cod){
            window.location="http://localhost/Actividad/modificar.php?parametro="+cod;
        }
        function eliminar(cod){
            window.location="http://localhost/Actividad/capturar.php?parametro="+cod+"&funcion=eliminar";
        }
    </script>
<?php include("menu.php"); ?>
</head>
<body>
    <?php

    require "controlDB.php";

    $obj = new controlDB();

    $datos = $obj->consultar("select * from usuarios");
    ?>
    <table width="70%" border="0">
        <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Direccion</th>
            <th scope="col">Barrio</th>
            <th scope="col">Estdato</th>
            <th scope="col">Departamento</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Estado</th>
            <th scope="col">Fijo</th>
            <th scope="col">Celular</th>
            <th scope="col">Email</th>
            <th scope="col">Observacion</th>
            <th scope="col">Fecha Registro</th>
            <?php if($_GET["z"]=="modificar"){?>
            <th scope="col">Modificar</th>
            <?php }if($_GET["z"]=="eliminar"){?>
            <th scope="col">Eliminar</th>
            <?php } ?>
        </tr>
        <?php foreach($datos as $fila) {?>
        <tr>
            <td><?php echo $fila["CedulaID"]; ?></td>
            <td><?php echo $fila["Nombres"]; ?></td>
            <td><?php echo $fila["Apellidos"]; ?></td>
            <td><?php echo $fila["Direccion"]; ?></td>
            <td><?php echo $fila["Barrio"]; ?></td>
            <td><?php echo $fila["Estrato"]; ?></td>
            <td><?php echo $fila["Departamento"]; ?></td>
            <td><?php echo $fila["Ciudad"]; ?></td>
            <td><?php echo $fila["Estado"]; ?></td>
            <td><?php echo $fila["Fijo"]; ?></td>
            <td><?php echo $fila["Celular"]; ?></td>
            <td><?php echo $fila["Email"]; ?></td>
            <td><?php echo $fila["Observacion"]; ?></td>
            <td><?php echo $fila["fecharegistro"]; ?></td>
            <?php if($_GET["z"]=="modificar"){?>
            <td><img src="images/edit.png" width="20" onclick="modificar(<?php echo $fila["CedulaID"]; ?>)" /></td>
            <?php }if($_GET["z"]=="eliminar"){?>
            <td><img src="images/delete.png" width="20" onclick="eliminar(<?php echo $fila["CedulaID"]; ?>)" /></td>
            <?php }?>
        </tr>
        <?php  }?>
    </table>

</body>
</html>