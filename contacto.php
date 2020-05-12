<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$servicos = $_POST['servicios'];
$trabajando=$_POST['trabajando']; 
$conoc = $_POST['conoce'];
$comentario = $_POST['mensaje'];


$para      = 'ingenieropaul_22@hotmail.com';
$titulo    = 'Contacto Web';
$msj1   = 'Nombres y Apellidos: ' . $nombre ." ".$apellido. "\r\n" . 'Cargo: ' . $cargo . "\r\n" . 'email: ' . $email . "\r\n" . 'Telefono: ' . $telefono . "\r\n" . 'servicios: ' . $servicos . "\r\n". 'Trabajando: '. $trabajando. "\r\n" . 'conoce: ' . $conoc  . "\r\n". 'Mensaje: ' . $comentario;
$mensaje = '' . $msj1;
$cabeceras = 'From: ingenieropaul_22@hotmail.com' . "\r\n" .
    'Reply-To: ingenieropaul_22@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($para, $titulo, $mensaje, $cabeceras);

if (isset($_POST['submit'])) {

    if (email($para, $titulo, $mensaje, $cabeceras)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactarte con nosotros.'); window.location.href='http://www.corpibgroup.com';
    </script>";
 
    }else{
        echo 'Fall܇ el envio';
    }

}

?>