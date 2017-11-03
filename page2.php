<?php
session_start();

if ($_SESSION['logged_in']!= 1) {
                header("location: error.php");
}
else {
    $message= 'Этот текст только для юзеров';
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-k5bjxeyx3S5yJJNRD1eKUMdgxuvfisWKku5dwHQq9Q/Lz6H8CyL89KF52ICpX4cL" crossorigin="anonymous">

    <title>Страница 2</title>
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
    <div class="secret">
        <?php echo $message?>
    </div>
</div>

</body>
</html>

