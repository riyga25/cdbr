<?php
session_start();

require_once 'authorization.php';

if ($_SESSION['logged_in']==1) {
        header("location: enter.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-k5bjxeyx3S5yJJNRD1eKUMdgxuvfisWKku5dwHQq9Q/Lz6H8CyL89KF52ICpX4cL" crossorigin="anonymous">
</head>

<body>

<div class="header d-flex">
    <a href="/">Главная</a>
    <a href="page1.php">Страница 1</a>
    <a href="page2.php">Страница 2</a>
    <?php
    if ($_SESSION['logged_in'] ==1) {
        echo '<a href="logout.php" style="background: rebeccapurple">Выход</a>';
    }
    ?>
</div>

<div class="main d-flex">
    <form class="Form" action="index.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Адрес</label>
            <input type="email" class="form-control" name="email"
                   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" name="password"
                   id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" name="remember" class="form-check-input">
                Запомнить меня
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
<div class="footer">

</div>
</body>
</html>
