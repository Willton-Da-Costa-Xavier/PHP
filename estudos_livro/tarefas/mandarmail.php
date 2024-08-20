<?php
// Carregar o autoloader do Composer
// require 'vendor/autoload.php';

// Importar classes PHPMailer no namespace global



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include "biblioteca/PHPMailer-master/src/PHPMailer.php";

include "biblioteca/PHPMailer-master/src/SMTP.php";

include "biblioteca/PHPMailer-master/src/Exception.php";

// Instanciar o PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();                                             // Configura o PHPMailer para usar SMTP
    $mail->Host       = 'smtp.gmail.com';                        // Especifica o servidor SMTP
    $mail->SMTPAuth   = true;                                    // Habilita a autenticação SMTP
    $mail->Username   = 'minhacontateste71@gmail.com';                   // Email que vai enviar o email
    $mail->Password   = 'uxmacsimjnicvvzt';                             // Senha do email
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Habilita a criptografia TLS, `ssl` também pode ser usado
    $mail->Port       = 587;                                     // Porta TCP para conexão

    // Recipiente
    $mail->setFrom('minhacontateste7@gmail.com', 'WIllas');           // Quem está enviando
    $mail->addAddress('willtondacosta@gmail.com', 'Willouco'); // Adiciona o destinatário (pode adicionar mais de um)

    // Conteúdo do email
    $mail->isHTML(true);                                         // Define o formato de email como HTML
    $mail->Subject = 'Aqui está o assunto';                      // Assunto do email
    $mail->Body    = 'Este é o corpo do email <b>em HTML!</b>';  // Corpo do email em HTML
    $mail->AltBody = 'Este é o corpo do email em texto puro';    // Corpo do email em texto puro para clientes de email sem suporte a HTML

    // Enviar o email
    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo "A mensagem não foi enviada. Erro do PHPMailer: {$mail->ErrorInfo}";
}
?>
