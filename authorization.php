<?php
//Авторизация

session_start();

require_once 'db.php';

    $email=$_POST['email'];

    $query = $pdo->query("SELECT * FROM users WHERE email='$email'");

//Запись данных в сессию
if ($query->rowCount()!=0) {
        $user = $query->fetch();

    if (md5($_POST['password']) == $user['password']) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;
    }
}

//Создание куки если "Запомнить меня"
if ($_REQUEST['remember']) {
    setcookie('user', md5($email), strtotime('+7 days'), '/');
}
