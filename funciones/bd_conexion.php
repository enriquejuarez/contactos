<?php
    $conn = new mysqli('localhost', 'root', '123456', 'contactos');
    
    if ($conn->connect_error){
        echo $error = $conn->connect_error;
    }
?>