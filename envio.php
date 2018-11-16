<?php
	$destino = "jfernandoromano@gmail.com";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $telefono = $_POST['telefono'];
    $consulta = $_POST['consulta'];
    $contenido = "Nombre: " . $name . "/Mi correo: " . $email . "/Mi telefono: " . $telefono . "/Mi consulta: "  $consulta;
    mail ($destino, "Contacto ", $contenido);
?>
