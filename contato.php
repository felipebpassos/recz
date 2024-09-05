<?php
// Importa a classe do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carrega o autoload do Composer para carregar as classes do PHPMailer
require 'vendor/autoload.php';

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['whatsapp']) && isset($_POST['tratamento']) && isset($_POST['mensagem'])) {
    // Função para sanitizar as entradas

    // Sanitize input data
    $nome = sanitize_input($_POST["nome"]);
    $celular = sanitize_input($_POST["celular"]);
    $tratamento = sanitize_input($_POST["tratamento"]);
    $mensagem = sanitize_input($_POST["mensagem"]);

    // Cria uma nova instância do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com.br'; // Hostinger SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@clinicapalazzo.com.br'; // Seu e-mail
        $mail->Password = ''; // Sua senha de e-mail
        $mail->SMTPSecure = 'ssl'; // Use TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to

        // Define o remetente e o destinatário
        $mail->setFrom('contato@clinicapalazzo.com.br', 'Paula Pontes');
        $mail->addAddress('contato@clinicapalazzo.com.br');

        // Define o assunto e o corpo do e-mail
        $mail->Subject = 'Novo contato do site';
        $mail->Body = "Nome: $nome\nWhatsapp: $celular\nTratamento: $tratamento\nMensagem:\n$mensagem\n";

        // Envia o e-mail
        $mail->send();
        header("Location: https://recz.com.br?success=Mensagem+enviada+com+sucesso!");
        exit();
    } catch (Exception $e) {
        header("Location: https://recz.com.br?error=Erro+no+envio+do+email");
        exit();
    }
} else {
    header("Location: https://recz.com.br?error=Erro+no+envio+da+mensagem");
    exit();
}
