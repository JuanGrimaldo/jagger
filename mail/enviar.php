<?php
    $destino = "jaggerbarsas@gmail.com";
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $mensaje = $_POST["message"];
    $contenido = "Nombre: " . $nombre . "\Email: " . $correo . "\Mensaje: " . $mensaje;
    mail($destino, "Conctacto", $contenido);
    header("Location:thx.html");
?>