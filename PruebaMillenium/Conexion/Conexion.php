<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "db_pruebamillenium";


    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    //if($conexion->connect_error)
    if ($conexion)
    {
        echo "conexion Exitosa";
        //die ("Fallo al Conectar a la Base de datos" . $conexion->connect_error);
    }
    else 
    {
        echo "Fallo conexion";
    }

    // CREACION BASE DE DATOS
    $sqldb = 'CREATE DATABASE db_pruebamillenium';
    if ($conexion->query($sqldb) === true) 
    {
        echo "Se ha creado la base de datos";
    }
        else 
        {
            die("Error al crear la Base de datos" . $conexion->Error);
        }

    // CREACION TABLA
    $sqltbl = "CREATE TABLE usermillenium(
        Nombres VARCHAR (100),
        Apellidos VARCHAR (100)
    )";

    if ($conexion->query($sqltbl) === true) 
    {
        echo "Las Tabla User se ha creado con Exito";
    }
        else 
        {
            die("Error al crear la tabla" . $conexion->connect_error); 
        }
?>