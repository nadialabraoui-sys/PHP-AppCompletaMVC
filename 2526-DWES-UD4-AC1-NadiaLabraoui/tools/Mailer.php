<?php
namespace Nadia\Tools;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    private string $remitente;
    private string $destinatario;
    private string $mensaje;
    private string $asunto;

    public function __construct(string $remitente, string $destinatario, string $mensaje, string $asunto)
    {
        $this->remitente = $remitente;
        $this->destinatario = $destinatario;
        $this->mensaje = $mensaje;
        $this->asunto = $asunto;
    }

    public function enviarCorreo(): void
    {
        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'nadialabraoui@gmail.com';
            $mail->Password   = 'ofzh mjkj ucup jebb';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;


            $mail->setFrom($this->remitente, 'Remitente');
            $mail->addAddress($this->destinatario);


            $mail->isHTML(true);
            $mail->Subject = $this->asunto;
            $mail->Body    = $this->mensaje;

            $mail->send();

        } catch (Exception $e) {
            echo "No se pudo enviar el correo: {$mail->ErrorInfo}";
        }
    }
}
