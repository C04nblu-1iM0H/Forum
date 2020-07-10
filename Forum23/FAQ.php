<?php
    session_start();
    @$_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/faq2.css">
    <title>Document</title>
</head>
<body>
<header>
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
</header>
<section>
            <h2><span>Ответы на часто задаваемые вопросы<span></h2>
            <p>Если вы впервые на сайте, то рекомендуем ознакомиться с <a href="help.html">правилами.</a></p>
            <article>
                <h2>Профиль</h2>
    <div id="faq">
        <div class="faq__item">
            <a href="#" class="js-faq ">Удаление аккаунта</a>
            <div class="drop_text js-drop_text">
                <p>На данный момент такой функции нет. Если выхотите создать другой аккаунт или просто уйти с сайта - напишите администратору сообщение с просьбой заблокировать аккаунт</p>
            </div>
        </div>
                <div class="faq__item">
            <a href="#" class="js-faq ">Как добавить ссылки на профили в социальные сети?</a>
            <div class="drop_text js-drop_text">
                <p>В настройках профиля есть дополнительные поля для ссылок, которые будут отображаться, как ссылки на соц. сети.</p>
                    </div>
        </div>
                        <div class="faq__item">
            <a href="#" class="js-faq ">Почему никто не видит мои списки “Просмотрено”, “Смотрю” и т. д.?</a>
            <div class="drop_text js-drop_text">
                <p>В настройках профиля есть раздел "приватность", нужно отметить галочками что будет видно другим пользователям.</p>
                    </div>
        </div>
                                <div class="faq__item">
            <a href="#" class="js-faq js-faq-title">Почему не обновляется аватарка? Я залил новую, но у меня до сих пор старая!</a>
            <div class="drop_text js-drop_text">
                <p>После того, как Вы залили новый аватар, нужно сохранить изменения, а после – перезагрузить/обновить страницу.</p>
                    </div>
        </div>
        <div class="faq__item">
            <a href="#" class="js-faq js-faq-title">Что такое штрафные баллы и как их снять?</a>
            <div class="drop_text js-drop_text">
                <p>При нарушении правил в комментариях к аниме (маты, нецензурная лексика и т.д.) пользователю начисляется штраф. Снимается он автоматически 1 балл 1 раз в день при заходе на сайт. Вы не сможете оставлять комментарии, пока не снимете весь штраф.</p>
        </div>
        </div>
                </div>
                
            </article>

            <article>
                <h2>Сайт</h2>
                <div id="faq">
                                                        <div class="faq__item">
            <a href="#" class="js-faq js-faq-title">Будет ли приложение для Android и iOS?</a>
            <div class="drop_text js-drop_text">
                <p>Нет. Для создания подобных приложений нужны знания языков программирования, ориентированные именно для мобильных приложений (Java, Swift и т.д.). У нас в команде нет человека с такими знаниями, нанимать программиста - дорого (можете сами загуглить сколько стоит мобильная разработка), просить кого-то из пользователей - слишком рискованно (начиная от элементарного отсутствия опыта у потенциального разработчика и заканчивая его возможным уходом/забиванием, поскольку заниматься поддержкой приложения сами не сможем).
                                Знающие люди могут возразить, что сейчас есть возможность создавать так называемые гибридные приложения. Мы можем создать его, но оно будет лагать и тормозить. Поэтому, от создания гибридного приложения сразу отказались. 
                                Даже если само приложение будет создано - не факт что его примут в Play Маркет и тем более AppStore (где модерация ручная). Не забывайте, что все подобные сайты не имеют лицензий на аниме. Даже если модерация будет пройдена, всегда есть риск, что приложение удалят из магазина. 
                                Конечно, пользователи андроида всегда могут установить приложение вне маркета, но пользовали iOS в этом ограничены.
                                Да, мы знаем, что некоторые другие сайты по аниме сделали свои приложения. Но считаем эту затею слишком рискованной.
                                А теперь хорошая новость. Сейчас становятся популярными так называемые прогрессивные веб-приложения (Progressive Web Apps). Если коротко - они выглядят как приложения, запускаются по нажатии на иконку и создаются теми же инструментами, что и обычные сайты. Если вы никогда о них не слышали, на хабре есть хорошая статья под названием "Progressive Web Apps: WhoAmI". Преимущества этого подхода - неважно какая у вас операционная система, не нужен магазин приложений, приложение будет хорошо выглядеть и работать на смартфоне. Вот на такое приложение мы и будем ориентироваться в будущем, а не на классическое мобильное приложение.</p>
                    </div>
        </div>
                                                                <div class="faq__item">
            <a href="#" class="js-faq js-faq-title">Я не помню на какой серии остановился!</a>
            <div class="drop_text js-drop_text">
                <p>Сайт запоминает на какой серии вы остановились в момент нажатия на номер серии. Этот номер помечается зеленым цветом.</p>
                    </div>
        </div>
                                                                        <div class="faq__item">
            <a href="#" class="js-faq js-faq-title">Тут нет аниме, которое я хочу посмотреть. Это можно исправить?</a>
            <div class="drop_text js-drop_text">
                <p>Да, конечно. Можете оставить любые пожелания, перейдя по этой ссылке или нам на почту, если не пользуетесь вк all.yummy.anime@gmail.com</p>
                     </div>
        </div>
                                                                                <div class="faq__item">
            <a href="#" class="js-faq js-faq-title">У меня "что-то" не работает на сайте...</a>
            <div class="drop_text js-drop_text">
                <p>По всем техническим проблемам обращайтесь к администрации. </div>
        </div>
            </article>
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
<script src="js/jquery-3.3.1.min.js"> </script>
<script type="text/javascript" src="js/js_faq.js"></script>
</body>
</html>