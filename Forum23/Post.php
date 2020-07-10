<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/news.css">
    <title>Posts</title>
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

        <section class="post_add">
            <form class="post" action="post_add.php" method="POST" enctype="multipart/form-data">
                <label class="text" for="article">Заголовок статьи</label>
                <input type="text" name="article_header" placeholder="Введите заголовок статьи"> 
                <label class="text" for="message">Message</label>
                <textarea  name="article_message" placeholder="Введите текст статьи"></textarea>
                <div class="button">
                <div class="file_inp">
                    <label>
                        <input type="file" name="images">
                        <span>Выберите файл</span>
                    </label>
                </div>
                <input  name="submit" type="submit" value="Сохранить">
                </div>
            </form>
        </section>
        <footer>
        <section class="block_footer">
            <img class="logo" src="./imagesite/logo.png">
                <ul>
                    <li><a href="#"><img src="./imagesite/vkfooter1.png"></a></li>
                    <li><a href="#"><img src="./imagesite/facefooter.png"></a></li>
                    <li><a href="#"><img src="./imagesite/instafooter1.png"></a></li>
                </ul>
        </section>  
    </footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/mobail.js"></script>
    <script src="js/input.js"></script>
    <script src="js/image.js"></script>
</body>
</html>