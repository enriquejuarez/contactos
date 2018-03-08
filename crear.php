<?php
    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }
    if (isset($_POST['numero'])){
        $numero = $_POST['numero'];
    }

    try{
        require_once('funciones/bd_conexion.php');
        $sql = "INSERT INTO contactos (id, nombre, numero)";
        $sql .= "VALUES (NULL, '{$nombre}', '{$numero}')";
        $resultado = $conn->query($sql);
    }catch(Exception $e){
        $error = $e->getMessage();
    }
?>
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
            <pre>
                <?php 
                    if ($resultado){
                        echo "Contacto creado";
                    }else{
                        echo "Error: " . $conn->error;
                    }
                ?>
            </pre>
        <br>
        <a href="index.php" class="volver">Volver a inicio</a>    
        </div>
    </div>
    <?php
        $conn->close();
    ?>
</body>
</html>