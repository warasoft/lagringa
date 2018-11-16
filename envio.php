<?php
    $destino = "jfernandoromano@gmail.com";
    $name = $_POST["name"];    
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $consulta = $_POST["consulta"];
    $contenido = "Nombre: " . $name . "/Mi correo: " . $email . "/Mi telefono: " . $telefono . "/Mi consulta: "  $consulta;
    mail ($destino, "Contacto ", $contenido);
?>
