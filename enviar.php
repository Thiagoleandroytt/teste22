<?php

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data["nome"];
$email = $data["email"];
$numero = $data["numero"];

// EMAIL DO ADMIN
$admin = "thiagodev0422@gmail.com";

$assunto = "Novo Sorteio - Chá de Cozinha";

$mensagem = "
Novo participante no sorteio:

Nome: $nome
Email: $email
Número sorteado: $numero
";

$headers = "From: sorteio@seudominio.com";

// Envia SOMENTE para o admin
mail($admin, $assunto, $mensagem, $headers);

echo "Email enviado";

?>