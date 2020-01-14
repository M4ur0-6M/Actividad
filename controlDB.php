<?php
class controlDB{

    function __construct(){
        try{
            //declaracion de var
            $host="localhost";
            $db_name="empresa";
            $user="root";
            $pass="";

            //Cadena de conexion
            $this->con=mysqli_connect($host,$user,$pass) or die ("Error en la Conexion a la BBDD");

            //seleccion de BBDD
            mysqli_select_db($this->con,$db_name) or die ("No existe la BBDD");

            //echo "conexion Exitosa";
        }
        catch(Exception $ex){
            throw $ex;
        }
    }

    function consultar($sql){

        $respuesta = mysqli_query($this->con, $sql);

        $data=NULL;
        while($fila=mysqli_fetch_assoc($respuesta)){
            $data[]=$fila;
        }
        return $data;
    }

    // insert, delete, update

    function actualizar($sql){
        mysqli_query($this->con, $sql);
        if(mysqli_affected_rows($this->con)<=0){
            echo " no se údo realizar lo pedido";
        }
        else{
            echo " se han realizado los cambios";
        }
    }
}
?>