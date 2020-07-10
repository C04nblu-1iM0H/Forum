<?php
require_once './admin/param.php';

if(isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password'])&&$_POST['password2']==$_POST['password']){
    $login = $_POST['login'];
    $password = $_POST['password'];	
    $login =trim(stripslashes($login));
    $login = trim(htmlspecialchars($login));
    $password =trim( stripslashes($password));
    $password = trim(htmlspecialchars($password));
    $querylog="SELECT id FROM reg WHERE login='".$login."'";
    $reslog=mysqli_query($db, $querylog) or die("Server Error #1");
    if(mysqli_num_rows($reslog)>0){
        print("Этот логин занят! <a href='register.php'>Попробовать ещё!</a>");  #echo "<script>alert()</script>";
    }else{
        if($_FILES['images']['error']==0){
            $filenameTMP = $_FILES['images']['tmp_name'];
            $filename = $_FILES['images']['name'];
            move_uploaded_file($filenameTMP , "img/$filename");//убрать userid
            $query="INSERT INTO reg( login, password, images) VALUES ('".$login."',SHA1('".$password ."'),'".$filename."')";
        }else{
            $query="INSERT INTO reg(login,password) VALUES('".$login."',SHA1('".$password ."'))";
        }
        mysqli_query($db,$query)or die("SERVER ERROR #2");
        $new_url = 'index.php';
        header('Location: '.$new_url);
        exit();
    } 
    }else{
        echo "Регистрация не возможна или отменена </br> <a href='index.php'>Попробуйте ещё!</a>";
    }
mysqli_close($db);
?>