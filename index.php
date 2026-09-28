
<!DOCTYPE html>
<html>
<head>
    <title>Registro de estudiantes</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <div class="contenedor">

        <h2>Registro de estudiantes</h2>

        <form action="guardar.php" method="POST">

            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre">

            <label>Curso:</label>
            <input type="text" name="curso" placeholder="Escribe tu curso">

            <button type="submit">Guardar</button>

        </form>

    </div>

</body>
</html>

