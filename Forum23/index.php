<?php
    session_start();
?>  
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/registr.css">
    <title>Регистрация/Авторизация</title>
</head>
<body>
<header>
    <div class="wrapper-menu">
          <div class="line-menu half start"></div>
          <div class="line-menu"></div>
          <div class="line-menu half end"></div>
    </div>
    <nav class="fill">
        <ul class="listOfLinks">
        <li><a href="./News.php">Главная</a></li>
            <li><a href="./forum.php">Форум</a></li>
            <li><a href="./index.php">Регистрация/Авторизация</a></li>
            <li><a href="./Post.php">Создание поста</a></li>
            <li><a href="./ViewPost.php">Статьи</a></li>
            <li><a href="./FAQ.php">FAQ</a></li>
        </ul>
        <ul class="socialNetworks">
            <li><a href="#"><img src="imagesite/Vk.png"></a></li>
            <li><a href="#"><img src="imagesite/Instagram.png"></a></li>
             <li><a href="#"><img src="imagesite/Facebook.png"></a></li>
            <li><a href="#"><img src="imagesite/Twitter.png"></a></li>
        </ul>
    </nav>
    <nav class="menu">
        <ul>
            <li><a href="./News.php">Главная</a></li>
            <li><a href="./forum.php">Форум</a></li>
            <li><a href="./index.php">Регистрация/Авторизация</a></li>
            <li><a href="./Post.php">Создание поста</a></li>
            <li><a href="./ViewPost.php">Статьи</a></li>
            <li><a href="./FAQ.php">FAQ</a></li>
        </ul>
    </nav>
</header>
<section class="container">
    <section>
        <menu>
            <ul class="links">
                <li class="signin-active"><a class="btn">Авторизация</a></li>
                <li class="signup-inactive"><a class="btn">Регистрация</a></li>
            </ul>    
        </menu>
        <?php
        if(!isset($_POST['send'])){
        ?>
        <form id="form-signin" class="form-signin" action="login.php" method="POST" name="form">
            <label>Имя</label>
                <input class="form-styling" type="text" name="login" required placeholder=""/>
            <label>Пароль</label>
                <input class="form-styling" type="password" name="password" required placeholder=""/>
            <input type="submit" class="btn-signin" name="send" value="Авторизоваться"/><br>
        </form>
        <?php
        }
        ?> 
        <?php
        if(!isset($_POST['send'])){
        ?>
        <form  id="#form-signup" class="form-signup" name="form" action="register.php" method="POST"  enctype="multipart/form-data">
            <label>Имя</label>
                <input class="form-styling" type="text" name="login" required placeholder=""/>
            <label>Пароль</label>
                <input id="password" class="form-styling" type="password" name="password" required placeholder=""/>
            <label>Повторите пароль</label>
                <input class="form-styling" type="password" name="password2" required placeholder=""/>
            <div class="file_inp">
                <label>
                    <input type="file" name="images" />
                    <span>Выберите файл</span>
                </label>
            </div>
            <input type="submit" class="btn-signin" name="send" value="Зарегистрироваться"/>
        </form>
        <?php
        }
        require_once 'register.php';
        ?>
        </section>
    </section>
    <script src="js/jquery-3.4.1.min.js"></script>
<script src="js/index.js"></script>
<script src="js/image.js"></script>
<script src="js/mobail.js"></script>
<script src="js/input.js"></script>
</body>
</html>