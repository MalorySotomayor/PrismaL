<?php
$field_name = $_POST['cf_name'];
$field_apellido = $_POST['cf_apellido'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'pamela.rosales@pucp.pe';
$subject = 'Mensaje del visitante: '.$field_name . ' ' . $field_apellido;

$body_message = 'De: ' .$field_name . ' ' . $field_apellido ."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mensaje: '.$field_message;

$headers = 'De: '.$field_email."\r\n";
$headers .= 'Responder a: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Gracias por su mensaje, le contestaremos pronto.');
		window.location = '../contacto.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert(' Falla al enviar el mensaje');
		window.location = '../contacto.html';
	</script>
<?php
}
?>