<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $contato = htmlspecialchars($_POST['contato']);
    $idade = htmlspecialchars($_POST['idade']);
    $dataNascimento = htmlspecialchars($_POST['dataNascimento']);
    $comentarios = htmlspecialchars($_POST['comentarios']);

    $to = "seu-email@exemplo.com";
    $subject = "Novo feedback recebido";
    $message = "Nome: $nome\nE-mail: $email\nIdade: $idade\nData de Nascimento: $dataNascimento\nComentários:\n$comentarios";
    $headers = "From: no-reply@seusite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha ao enviar o email.";
    }
}
?>

