<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // o incluye los archivos manualmente si no usás Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $empresa = htmlspecialchars($_POST['empresa']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $servicio = htmlspecialchars($_POST['servicio']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo inválido");
    }

    // Crear instancia PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.tuservidor.com'; // Ej: smtp.gmail.com o smtp.tudominio.com
        $mail->SMTPAuth = true;
        $mail->Username = 'info@transcal.com.ar'; // Tu email
        $mail->Password = 'tu_contraseña';         // Tu contraseña
        $mail->SMTPSecure = 'tls';                 // o 'ssl'
        $mail->Port = 587;                         // 587 para TLS, 465 para SSL

        // Correo de empresa
        $mail->setFrom('info@transcal.com.ar', 'Transcal');
        $mail->addAddress('info@transcal.com.ar'); // Destinatario principal
        $mail->addReplyTo($email, "$nombre $apellido");

        // Contenido del email
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto desde el sitio web';
        $mail->Body    = "
            <h2>Nuevo mensaje de contacto</h2>
            <p><strong>Nombre:</strong> $nombre $apellido</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Empresa:</strong> $empresa</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Tipo de servicio:</strong> $servicio</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        ";

        $mail->send();

        // Enviar copia al usuario
        $mailUsuario = new PHPMailer(true);
        $mailUsuario->isSMTP();
        $mailUsuario->Host = 'mail.tuservidor.com';
        $mailUsuario->SMTPAuth = true;
        $mailUsuario->Username = 'info@transcal.com.ar';
        $mailUsuario->Password = 'tu_contraseña';
        $mailUsuario->SMTPSecure = 'tls';
        $mailUsuario->Port = 587;

        $mailUsuario->setFrom('info@transcal.com.ar', 'Transcal');
        $mailUsuario->addAddress($email, "$nombre $apellido");

        $mailUsuario->isHTML(true);
        $mailUsuario->Subject = 'Copia de tu mensaje a Transcal';
        $mailUsuario->Body = "
            <h2>Gracias por contactarte con Transcal</h2>
            <p>Hemos recibido tu mensaje. A continuación te enviamos una copia:</p>
            <hr>
            <p><strong>Nombre:</strong> $nombre $apellido</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Empresa:</strong> $empresa</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Tipo de servicio:</strong> $servicio</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        ";

        $mailUsuario->send();

        echo "Mensaje enviado correctamente.";
    } catch (Exception $e) {
        echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Acceso no permitido.";
}
