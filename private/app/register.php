<?php 
require_once __DIR__ . '/db.php';

function registerUser($name, $email, $password, $confirm) {
    global $pdo;

    // verifica se as senhas são diferentes
    if ($password !== $confirm) return 2;

    // verifica se o email ja existe
    $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $check->execute([$email]);
    if ($check->rowCount() > 0) return 1;

    // criptografa a senha
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // insere o usuario no banco
    $insert = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $insert->execute([$name, $email, $hash]);

    return 0;
}
?>