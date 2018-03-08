<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
    try{
        require_once('funciones/bd_conexion.php');
        $sql = "SELECT * FROM contactos WHERE id ={$id}";
        $resultado = $conn->query($sql);
        $registro = $resultado->fetch_assoc();
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
            <h2>Editar contacto</h2>
            <form action="actualizar.php" method="get">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $registro['nombre'] ?>">
                </div>
                <div class="campo">
                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero" placeholder="Número" value="<?php echo $registro['numero'] ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</body>
</html>