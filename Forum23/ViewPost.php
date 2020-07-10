<?php
    session_start();
    @$_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/view.css">
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
    <section class="view">
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'registr') or die("Database Error");
        mysqli_set_charset($db,"utf8");
        $query=mysqli_query($db, "SELECT id, userid, images, article_header, article_message  FROM post ORDER BY id DESC");
        if(mysqli_num_rows($query)>0){
            $arr = mysqli_fetch_assoc($query);
            do{
                $mes_userid = $arr['userid'];
                $queruser=mysqli_query($db, "SELECT login, images FROM reg WHERE id='".$mes_userid."'");
                $mesuser = mysqli_fetch_assoc($queruser);
                ?>
                <article class="viewpost" id="message<?php echo $arr['id']; ?>">
                <div><?php echo '<img class="postimg"  src="img/' . $arr['images'] . '">';?></div>
                    <div class="wrap_user">
                    <div class="user_img"><?php echo '<img class="user" src="img/' . $mesuser['images'] . '">';?></div>
                        <div>
						    <div  class="user-text">Author:<?php echo " ".$mesuser["login"];?></div>
                            <div><?php  echo date("d F Y "); ?></div>
					    </div>
                    </div>
                    <div class="wrap_article">
                        <h2><?php echo $arr['article_header']; ?></h2>
                        <p><?php echo $arr['article_message'];?></p>
                    </div>
                </article>
            <?php  
            }while($arr = mysqli_fetch_assoc($query));
            ?>
        <?php
        }
        mysqli_close($db);
        ?>
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
</body>
</html>