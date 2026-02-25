<?php
$proceso = $_POST['proceso'];

if ($proceso == "procesarContacto") {
    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa']; // Nuevo campo
    $cargo = $_POST['cargo'];     // Nuevo campo
    $comentarios = $_POST['comentarios'];

    $emailDestino = "bpumacc@gmail.com";
    $encabezado = "Nuevo Contacto desde la Web - Valtek Group";
    
    // Construcción del mensaje
    $mensaje = "===============================\n";
    $mensaje .= "DATOS DEL CONTACTO\n";
    $mensaje .= "===============================\n";
    $mensaje .= "Nombres:      $nombres\n";
    $mensaje .= "Teléfono:     $telefono\n";
    $mensaje .= "Email:        $email\n";
    $mensaje .= "Empresa:      $empresa\n"; // Incluido en el correo
    $mensaje .= "Cargo:        $cargo\n";   // Incluido en el correo
    $mensaje .= "Comentarios:  $comentarios\n";
    $mensaje .= "===============================\n";

    // Cabeceras del correo
    $emailCabecera = "From: $nombres <$email>\r\n";
    $emailCabecera .= "Reply-To: $email\r\n";
    $emailCabecera .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if(mail($emailDestino, $encabezado, $mensaje, $emailCabecera)){
        $resultado = "SI";
    } else {
        $resultado = "NO";
    }

    echo json_encode(array("resultado" => $resultado));
}

// Repetir lógica similar para "procesarCotizacion" si también lleva esos campos
if ($proceso == "procesarCotizacion") {
    $servicios = $_POST['servicios'];
    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $comentarios = $_POST['comentarios'];

    $emailDestino = "pdecomputacion@gmail.com";
    $encabezado = "Nueva Cotización desde la Web";

    $mensaje = "DATOS DEL CLIENTE\n";
    $mensaje .= "===============================\n";
    $mensaje .= "Servicios:    $servicios\n";
    $mensaje .= "Nombres:      $nombres\n";
    $mensaje .= "Teléfono:     $telefono\n";
    $mensaje .= "Email:        $email\n";
    $mensaje .= "Empresa:      $empresa\n";
    $mensaje .= "Cargo:        $cargo\n";
    $mensaje .= "Comentarios:  $comentarios\n";

    $emailCabecera = "From: $nombres <$email>\r\n";
    $emailCabecera .= "Reply-To: $email\r\n";

    mail($emailDestino, $encabezado, $mensaje, $emailCabecera);
    echo json_encode(array("resultado" => "SI"));
}
?>