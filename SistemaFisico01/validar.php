<?php
// Incluye el archivo "db.php" que contiene la conexión a tu base de datos
include("db.php"); 

// Recoge los datos del formulario: usuario y contraseña
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

// Prepara la consulta SQL para buscar al usuario con las credenciales proporcionadas
$consulta = "SELECT* FROM Jean where usuario = '$USUARIO' and password = '$PASSWORD' ";

// Ejecuta la consulta SQL en la base de datos
$resultado = mysqli_query($conexion, $consulta);        //almacenar nuestras variables y  conexion

// Obtiene el número de filas en el resultado de la consulta SQL
$filas = mysqli_num_rows($resultado); //almacenara nuestro resultado

// Si hay al menos una fila en el resultado (es decir, las credenciales son correctas)
if($filas){
    // Redirige al usuario a la página "sistema.php"
    header("location:sistema.php");

}else{
     // Si las credenciales no son correctas, incluye el archivo "index.html" y muestra un mensaje de error
    include("index.html");
    ?>
    <p>Contrasena incorrecta</p>
    <style>
        p{
            color: red;
            margin-left: 35%;
            margin-top: 28%;
        }
    </style>
    <?php

}

// Libera el resultado de la consulta SQL
mysqli_free_result($resultado);

// Cierra la conexión a la base de datos
mysqli_close($conexion);





?>