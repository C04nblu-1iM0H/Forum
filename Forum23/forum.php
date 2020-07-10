<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/Forum.css">
    <title>Forum</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>

let timer;
function goHead(){
	timer = setInterval(function cont() {
 	$("#comment-list-box").load("message.php");
 	}, 1000);
}

goHead()

function showEditBox(editobj,id) {
	clearInterval(timer);
	// $(editobj).prop('disabled', false);
	$('textarea').prop('disabled', true);
	let currentMessage = $("#message" + id + " .message-content").html();
	let editMarkUp = '<textarea class="editText" rows="5" cols="80" id="txtmessage'+id+'">'+currentMessage+
	'</textarea><img name="ok" class="save" src="imagesite/save.svg" onClick="callCrudAction(\'edit\','+id+')" style="margin-right:2vh;"><img name="cancel" src="imagesite/cansel.svg" onClick="cancelEdit(\''+currentMessage+'\','+id+')">';
	$("#message" + id + " .message-content").html(editMarkUp);
	$(".wrap_but").hide();
}

function cancelEdit(message,id) {
	$("#message" + id + " .message-content").html(message);
	$('textarea').prop('disabled', false);
	$('#frmAdd').show();
	$(".wrap_but").show();
}


function callCrudAction(action,id) {
	let queryString;
	switch(action) {
		case "add":
			queryString = 'action='+ action + '&txtmessage='+ $("#txtmessage").val();
			// alert(queryString);
		break;
		case "edit":
			queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage"+id).val();
			$('textarea').prop('disabled', false);
			goHead();	
			// alert(queryString);
		break;
		case "delete":
			queryString = 'action='+action+'&message_id='+ id;
		break;
	}	 
	$.ajax({
	url: "crud_messages.php",
	data:queryString,
	type: "POST",
	success:function(data){
		switch(action) {
			case "add":
				$("#comment-list-box").append(data);
				// alert(data);
			break;
			case "edit":
				$("#message" + id + " .message-content").html(data);
				$('#frmAdd').show();
				// $("#message"+id+" .btnEditAction").prop('disabled', true);
			break;
			case "delete":
				$('#message'+id).fadeOut();
			break;
		}
		$("#txtmessage").val('');
		$(".wrap_but").show();
	},
	error:function (){}
	});
}
    </script>
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
    <section class="blockes">
	<section class="message">
		<div id="comment-list-box" class="message_wrap">
			<?php
				$db = mysqli_connect('localhost', 'root', '', 'registr') or die("Database Error");
				mysqli_set_charset($db,"utf8");
			    $messagequery=mysqli_query($db, "SELECT id, userid, message FROM messages ORDER BY id DESC");
					if(mysqli_num_rows($messagequery)>0){
						$arr = mysqli_fetch_assoc($messagequery);
            			do{
                    		$mes_userid = $arr['userid']; 
                    		$queruser=mysqli_query($db, "SELECT login,images FROM reg WHERE id='".$mes_userid."'");
                    		$mesuser = mysqli_fetch_assoc($queruser);
            ?>
			<div class="message-box" id="message<?php echo $arr['id']; ?>">
				<div class="wrap_mes">
                    <div class="user-data" > <?php echo '<img class="imageprof"  src="img/' . $mesuser['images'] . '">';?></div>
					<div>
						<div  class="user-text"><?php echo $mesuser["login"] ; ?></div>
						<div class="message-content"><?php echo $arr['message'];?></div>
					</div>
                </div>
				<div class="wrap_but">
                <?php
                if(@$_SESSION['user_id'] == $mes_userid){
                ?>	
					
					<img  name="edit" onClick="showEditBox(this,<?php echo $arr['id']; ?>)" src="imagesite/edited.svg">
					<img  name="delete" onClick="callCrudAction('delete',<?php echo $arr['id']; ?>)" src="imagesite/-delete_90528.svg">
				    
                <?php
                }
                ?>
                </div>
			</div>
            <?php
			    }while($arr = mysqli_fetch_assoc($messagequery));
			}else{
				echo "<span>No massage</span>";
			}
			?>
		</div>
	<div id="frmAdd">
		    <textarea name="txtmessage" id="txtmessage" cols="80" rows="5" required></textarea>
		    <button id="btnAddAction" name="submit" onClick="callCrudAction('add','')">Отправить</button>
	</div>
	</section>
	</section>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/mobail.js"></script>
</body>
</html>