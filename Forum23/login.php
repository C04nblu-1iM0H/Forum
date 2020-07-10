<?php
    require_once './admin/param.php';

    if(isset($_POST['send'])&&!empty($_POST['login'])&&!empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];	
        $login =trim(stripslashes($login));
        $login = trim(htmlspecialchars($login));
        $password =trim( stripslashes($password));
        $password = trim(htmlspecialchars($password));
            $query = "SELECT id, login, images FROM reg WHERE login = '".$login."' AND password = SHA1('".$password."') ";
            $res=mysqli_query($db, $query) or die("Server ERROR #3");
            if(mysqli_num_rows($res)==1){
                $next=mysqli_fetch_array($res);
                $image=$next['images'];
                if(empty($image)){
                    $image="error";
                }
                session_start();
                $_SESSION['user_id'] =$next['id'];
                $_SESSION['user_login']=$next['login'];
                $_SESSION['user_image']=$image;
                echo "Ваш логин - ".$next['login']."";
                echo "Ваш аватар - <img src='img/$image' width='100px' >";
                $new_url = 'News.php';
                header('Location: '.$new_url);
            }else{
                echo  "Недостаточно данных для входа <br><a href='index.php'>Попробовать ещё</a>";
            }
    }
    mysqli_close($db);    
?>