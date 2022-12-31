<?php
$destino = "GrayMarmol2021@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje:" . $mensaje;


$bool = mail($destino, "Contacto", $contenido);

if($bool) {
    echo "<script>alert('Correo enviado exitosamente.')</script>";
} else {
   echo "<script>alert('Ha ocurrido un error al enviar el mensaje.')</script>";
}

/*header("Location:contacto.html");*/


?>

