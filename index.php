<!DOCTYPE html>
<html>
<head>
  <title>Agenda PHP</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Agenda de contactos</h1>
        <div class="contenido">
            <h2>Nuevo contacto</h2>
            <form action="crear.php" method="post">
                <div class="campo">
                    <label for="nombre">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                    </label>
                </div>
                <div class="campo">
                    <label for="numero">
                        <input type="text" name="numero" id="numero" placeholder="Número">
                    </label>
                </div>
                <input type="submit" value="Agregar">
            </form>
        </div>
    </div>
</body>
</html>