<?php

$conexion = new mysqli("localhost", "root", "", "prueba_web");

$nombre = $_POST["nombre"];
$curso = $_POST["curso"];

$sql = "INSERT INTO estudiantes (nombre, curso)
        VALUES ('$nombre', '$curso')";

$conexion->query($sql);

echo "Estudiante registrado correctamente";

?>
