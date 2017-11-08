<?php
//Авторизация

session_start();

require_once 'db.php';

    $email=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $pass=filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $pass=crypt($pass, '$s');


    $query = $pdo->prepare("SELECT * FROM users WHERE email='$email'");
    $query->execute();

if ($query->rowCount()!=0) {
        $user = $query->fetch();

    if (hash_equals($user['password'], $pass)) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;
    }
}

//Создание куки если "Запомнить меня"
if ($_REQUEST['remember']) {
    setcookie('user', crypt($email), strtotime('+7 days'), '/');
}
