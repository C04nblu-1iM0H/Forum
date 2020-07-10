<?php
    session_start();

    $db = mysqli_connect('localhost', 'root', '', 'registr') or die("Database Error1");
    mysqli_set_charset($db,"utf8");
    if(isset($_SESSION['user_login'])){
    if(isset($_POST['submit'])&&!empty($_POST['article_header'])&&!empty($_POST['article_message'])){
        $article=$_POST['article_header'];
        $article = htmlspecialchars($article);//Заменяем символы ‘<’ и ‘>’на ASCII-код
        $article = trim($article); //Удаляем лишние пробелы
        $article = addslashes($article); //Экранируем запрещенные символы
        $message=$_POST['article_message'];
        $message = htmlspecialchars($message);//Заменяем символы ‘<’ и ‘>’на ASCII-код
        $message = trim($message); //Удаляем лишние пробелы
        $message = addslashes($message); //Экранируем запрещенные символы
        $id = $_SESSION['user_id'];
            if($_FILES['images']['error']==0){;
            $filenameTMP = $_FILES['images']['tmp_name'];
            $filename = $_FILES['images']['name'];
            move_uploaded_file($filenameTMP , "img/$filename");
        $sql="INSERT INTO post (userid, images, article_header,article_message,date) VALUES ('".$id."','".$filename."','".$article."','".$message."', NOW())";
        }else{
            echo "Ошибка отправки <a href='Post.php'>Попробуйте ещё раз</a>";
        }
        $query= mysqli_query($db, $sql) or die("Database Error2");
        if($query){
            header("Location:ViewPost.php");
        }
    }else{
        echo "<script>alert('вы не можете отправить пустую статью, заполните все поля  !!! ')</script>";
        echo "<script>setTimeout(function(){ window.location = 'Post.php';}, 100); </script>";
    }
}else{
    echo "<script>alert('вы не авторизованны, если хотите создавать статьи автаризуйтесь или зарегестрируйтесь')</script>";
    echo "<script>setTimeout(function(){ window.location = 'Post.php';}, 100); </script>";
}
?>