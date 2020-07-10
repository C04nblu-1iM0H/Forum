<?php
    session_start();
    @$_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/new.css">
    <title>News</title>
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
    <section class="block-image">
        <img class="Line-imeg" src="imagesite/3.jpg" alt="icon">
        <h1>Elysium Forum</h1>
        <p class="Line-imeg_p">новостной блог для начинающих авторов</p>
    </section>
    <section class="block">
        <?php
        if(isset($_SESSION['user_login'])){
        echo "<style> .user{ display: flex;} </style>";
        echo "<section class='user'>";
            echo "<ul class='block-user'>";
                require_once 'login.php';
	                $db = mysqli_connect('localhost', 'root', '', 'registr') or die("Database Error");
	                mysqli_set_charset($db,"utf8");
                    $id = addslashes(@$_SESSION['user_id']);
                    if(isset($_SESSION['user_id'])|| @$_SESSION['user_login']){
                        $sql = "SELECT images FROM reg WHERE id='".$id."'";
                        $query = mysqli_query($db, $sql);
                        $result = mysqli_fetch_assoc($query);
                        echo '<li class="info-user">Ваш аватар</li><img  src="img/' . $result['images'] . '" width="150px"  height="200px" >';
                        echo "<li class='info-user'>Ваш логин - ".@$_SESSION['user_login']."</li>";
                        echo "<li><a class='user-exit' href='logout.php'>Выйти</a></li>";
                    }else{
                        session_destroy();
                    }
                
            echo "</ul>";
        echo "</section>";
        }else{
            echo "<style> .user{display:none;} </style>";
        }
        ?> 
        <section class="block_news">
        <article>
               <img src="https://im0-tub-ru.yandex.net/i?id=4d9cec302b4298412f32d1578875a184-l&n=13" alt="«Sword Art Online: Alicization»">
                <div class="news_text">
                    <h2>Продолжение «Sword Art Online: Alicization» выйдет в октябре.</h2>
                    <p>Продолжение арки стартует в октябре 2019 года и будет нести название «War of Underworld».<br> 
                        Команда и каст сэйю останется прежним.</p>
                        <div class="menus">
                            <ul class="rating">
                                <li>Просмотров: 0</li>
                                <li>Комметарии</li>
                            </ul>
                            <ul class="image-like">
                                <li class="like"><a href="#"><img class="img2" src="https://img.icons8.com/ios/50/000000/hearts.png" alt="like"></a></li>
                                <li class="like-hover"><a href="#"><img class="img2" src="https://img.icons8.com/color/48/000000/hearts.png" alt="like"></a></li>
                            </ul>
                        </div>        
                 </div>
         </article>
         <article>
            <img src="imagesite/grexi.jpg" alt="«Nanatsu no Taizai»">
                <div class="news_text">
                    <h2>Теперь официально: Анонсирован 3-й сезон «Nanatsu no Taizai»</h2>
                    <p>3-й сезон «Nanatsu no Taizai: Wrath of the Gods» выйдет осенью 2019.<br> 
                            Режиссер: Сусуми Нисидзава<br>
                            Компоновка эпизодов: Ринтаро Икэда<br>
                            Постановка анимации персонажей: Rie Nishino<br>
                            Производство: Studio Deen</p>
                    <div class="menus">
                        <ul class="rating">
                            <li>Просмотров: 0</li>
                            <li><a href="#">Комметарии</a></li>
                        </ul>
                        <ul class="image-like">
                            <li class="like"><a href="#"><img class="img2" src="https://img.icons8.com/ios/50/000000/hearts.png" alt="like"></a></li>
                            <li class="like-hover"><a href="#"><img class="img2" src="https://img.icons8.com/color/48/000000/hearts.png" alt="like"></a></li>
                        </ul>
                    </div> 
                </div>
        </article>
    </section>
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
</body>
</html>