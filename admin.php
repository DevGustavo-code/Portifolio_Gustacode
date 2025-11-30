<?php


$senhaCorreta = '';
$dotenvPath = __DIR__ . '/.env';

if (file_exists($dotenvPath)) {
    $lines = file($dotenvPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '[') || str_starts_with(trim($line), ';') || str_starts_with(trim($line), '#')) {
            continue;
        }

        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if ($name === 'SENHA_CORRETA') { 
                $senhaCorreta = $value;
                break; 
            }
        }
    }
}


if (!isset($_GET['senha']) || $_GET['senha'] !== $senhaCorreta) {
    die("Acesso negado.");
}


$algoritmo = "AES-256-CBC";
$chave = "MinhaChaveSecreta123456789012345678901234";
$iv = "UmVldG9ySW5pY2lhbGl6YWNhbw==";

function descriptografar($dado_criptografado, $chave, $algoritmo, $iv) {
    $iv_padded = str_pad(substr($iv, 0, 16), 16, "\0");
    return openssl_decrypt(base64_decode($dado_criptografado), $algoritmo, $chave, 0, $iv_padded);
}


$arquivo = "mensagens.json";
$mensagens = json_decode(file_get_contents($arquivo), true);
?>

<h1>📬 Mensagens Recebidas</h1>

<?php if (isset($_GET['deletado'])): ?>
    <p style="color: green; font-weight: bold;">✅ Mensagem deletada com sucesso!</p>
<?php endif; ?>

<?php 

foreach ($mensagens as $id => $msg): 
 
    $nome_desc = descriptografar($msg['nome'], $chave, $algoritmo, $iv);
    $email_desc = descriptografar($msg['email'], $chave, $algoritmo, $iv);
    $mensagem_desc = descriptografar($msg['mensagem'], $chave, $algoritmo, $iv);
?>
  <div style="border:1px solid #ccc; padding:10px; margin:10px; position: relative;">
    <strong>Nome:</strong> <?= htmlspecialchars($nome_desc) ?><br>
    <strong>Email:</strong> <?= htmlspecialchars($email_desc) ?><br>
    <strong>Mensagem:</strong> <?= nl2br(htmlspecialchars($mensagem_desc)) ?><br>
    <em>Recebido em:</em> <?= htmlspecialchars($msg['data']) ?><br>
    
    <a 
      href="delete.php?id=<?= $id ?>&senha=<?= urlencode($senhaCorreta) ?>" 
      onclick="return confirm('Tem certeza que deseja deletar esta mensagem?');"
      style="
        position: absolute; 
        top: 10px; 
        right: 10px; 
        color: white; 
        background-color: red; 
        padding: 5px 10px; 
        text-decoration: none;
        border-radius: 3px;
      "
    >
      🗑️ Deletar
    </a>
    
  </div>
<?php endforeach; ?>