<?php
$senhaCorreta = '';
$dotenvPath = __DIR__ . '/.env';
if (file_exists($dotenvPath)) {
    $lines = file($dotenvPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            if (trim($name) === 'SENHA_CORRETA') { 
                $senhaCorreta = trim($value);
                break; 
            }
        }
    }
}


if (!isset($_GET['senha']) || $_GET['senha'] !== $senhaCorreta) {
    die("Acesso negado.");
}

$arquivo = "mensagens.json";
$id_para_deletar = $_GET['id'] ?? null;

if ($id_para_deletar !== null && is_numeric($id_para_deletar)) {
  
    $mensagens = json_decode(file_get_contents($arquivo), true);

   
    if (isset($mensagens[$id_para_deletar])) {
        unset($mensagens[$id_para_deletar]); 
        
      
        $mensagens = array_values($mensagens); 

      
        file_put_contents($arquivo, json_encode($mensagens, JSON_PRETTY_PRINT));
        
        header("Location: admin.php?senha=" . urlencode($senhaCorreta) . "&deletado=1");
        exit;
    }
}

header("Location: admin.php?senha=" . urlencode($senhaCorreta)); 
exit;