<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$contato = addslashes($_POST['contato']);
$dataNascimento = addslashes($_POST['dataNascimento']);
$idade = addslashes($_POST['idade']);

$para = "mariana2004.soares@gmail.com"; 
$assunto = "Entrar em Contato"; 
$corpo = "Nome: ".$nome."\nEmail: ".$email."\nContato: ".$contato."\nData de Nascimento: ".$dataNascimento."\nIdade: ".$idade;

$cabeca = "From: @mariana2004.soares@gmail.com\r\n";
$cabeca .= "Reply-To: ".$email."\r\n";
$cabeca .= "X-Mailer: PHP/" . phpversion();

if(mail($para, $assunto, $corpo, $cabeca)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Falha no envio do e-mail.";
}
?>





