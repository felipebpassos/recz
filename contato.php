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
function sanitize_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['whatsapp']) && isset($_POST['empresa']) && isset($_POST['servico'])) {
    // Sanitize input data
    $nome = sanitize_input($_POST["nome"]);
    $email = sanitize_input($_POST["email"]);
    $celular = sanitize_input($_POST["whatsapp"]);
    $empresa = sanitize_input($_POST["empresa"]);

    switch ($_POST["servico"]) {
        case "1":
            $servico = "Vídeo único/pontual";
            break;
        case "2":
            $servico = "Pacote mensal";
            break;
        case "3":
            $servico = "Estou aberto a opções";
            break;
        default:
            exit("Serviço inválido"); 
    }
    $mensagem = !empty($_POST['mensagem']) ? sanitize_input($_POST['mensagem']) : "Descrição da ideia/projeto não enviada pelo cliente.";

    // Cria uma nova instância do PHPMailer
    $mail = new PHPMailer(true);

    // Define o charset para UTF-8
    $mail->CharSet = 'UTF-8';

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
        $mail->Subject = 'NOVO CLIENTE: Vim através do site ReczFilms (Formulário de Contato)';
        $mail->Body = "- Nome: $nome\n\n- E-mail: $email\n\n- Whatsapp: $celular\n\n- @ da Empresa/Negócio no instagram: $empresa\n\n- 'No que está interessado?'\nResposta: $servico\n\n- Mensagem: \n$mensagem\n";

        // Envia o e-mail
        $mail->send();
        header("Location: " . $_ENV['SITE_URL'] . "?success=Mensagem+enviada+com+sucesso!");
        exit();

    } catch (Exception $e) {
        // Caso ocorra um erro ao enviar o e-mail
        header("Location: " . $_ENV['SITE_URL'] . "?error=Erro+no+envio+do+email");
        exit();
    }

} else {
    // Caso o formulário não tenha sido submetido corretamente
    header("Location: " . $_ENV['SITE_URL'] . "?error=Erro+no+envio+da+mensagem");
    exit();
}
