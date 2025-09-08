<?php
require_once __DIR__ . '/db.php';
session_start();    // função do php que controla o id do usuário na seção dele no navegador

function loginUser($email, $password) {
    global $pdo;

    $search = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
    $search->execute([$email]);
    $user = $search->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        return true;
    }

    return false;
}
