<?php

// Carrega o autoload do Composer para carregar as classes do PHPMailer e Dotenv
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Carrega as variáveis do arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Função para sanitizar os dados do formulário
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['whatsapp']) && isset($_POST['tratamento']) && isset($_POST['mensagem'])) {
    // Sanitize input data
    $nome = sanitize_input($_POST["nome"]);
    $celular = sanitize_input($_POST["whatsapp"]);
    $tratamento = sanitize_input($_POST["tratamento"]);
    $mensagem = sanitize_input($_POST["mensagem"]);

    // Cria uma nova instância do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP usando variáveis de ambiente
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = $_ENV['SMTP_SECURE'];
        $mail->Port = $_ENV['SMTP_PORT'];

        // Define o remetente e o destinatário
        $mail->setFrom($_ENV['SMTP_USER'], 'Simplify Web');
        $mail->addAddress($_ENV['SMTP_USER']);

        // Define o assunto e o corpo do e-mail
        $mail->Subject = 'Novo contato do site';
        $mail->Body = "Nome: $nome\nWhatsapp: $celular\nTratamento: $tratamento\nMensagem:\n$mensagem\n";

        // Envia o e-mail
        $mail->send();
        header("Location: " . $_ENV['SITE_URL'] . "?success=Mensagem+enviada+com+sucesso!");
        exit();

    } catch (Exception $e) {
        
        header("Location: " . $_ENV['SITE_URL'] . "?error=Erro+no+envio+do+email");
        exit();

    }

} else {

    header("Location: " . $_ENV['SITE_URL'] . "?error=Erro+no+envio+da+mensagem");
    exit();

}
