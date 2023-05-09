<?php
  // Obtener los datos enviados desde el formulario
  $datos = $_POST['datos'];

  // Dirección de correo electrónico de destino
  $destinatario = "ivan.eclipse117@gmail.com";

  // Asunto del correo electrónico
  $asunto = "Nuevo mensaje del formulario";

  // Enviar el correo electrónico
  mail($destinatario, $asunto, $datos);
?>
