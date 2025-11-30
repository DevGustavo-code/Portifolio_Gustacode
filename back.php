<?php
$algoritmo = "AES-256-CBC";
$chave = "MinhaChaveSecreta123456789012345678901234"; 
$iv = "UmVldG9ySW5pY2lhbGl6YWNhbw=="; 

function criptografar($dado, $chave, $algoritmo, $iv) {
   
    $iv_padded = str_pad(substr($iv, 0, 16), 16, "\0");
    return base64_encode(openssl_encrypt($dado, $algoritmo, $chave, 0, $iv_padded));
}

$arquivo = "mensagens.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, "[]");
}

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';


$nova = [
    "nome" => criptografar($nome, $chave, $algoritmo, $iv),
    "email" => criptografar($email, $chave, $algoritmo, $iv),
    "mensagem" => criptografar($mensagem, $chave, $algoritmo, $iv),
    "data" => date("d/m/Y H:i:s") 
];

$lista = json_decode(file_get_contents($arquivo), true);

$lista[] = $nova;

file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT));

header("Location: index.php?sucesso=1");
exit;
