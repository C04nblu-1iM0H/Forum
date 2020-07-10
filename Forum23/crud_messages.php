<?php

session_start();

require_once("DBController.php");
$dbcont = new DBController();
$action = $_POST["action"];
if(!empty($action)) {
	switch($action) {
		case "add":
		if(isset($_SESSION['user_login'])){
		if(!empty($_POST["txtmessage"])){
            $text=$_POST["txtmessage"];
            $text = htmlspecialchars($text);//Заменяем символы ‘<’ и ‘>’на ASCII-код
            $text = trim($text); //Удаляем лишние пробелы
            $text = addslashes($text); //Экранируем запрещенные символы
			$id = $_SESSION['user_id'];
			$login = $_SESSION['user_login'];
			$image = $_SESSION['user_image'];
		    $query = "INSERT INTO `messages` (`userid`, `message`) VALUES ('".$id."','".$text."')";
		    $insert_id = $dbcont->insert($query);
		    if($insert_id){
				  echo '<div class="message-box"  id="message' . $insert_id . '">
							<div class="wrap_mes">
							<div class="user-data" ><img class="imageprof"  src="img/' . $image . '"></div>
								<div>
									<div  class="user-text">'. $login .'</div>
									<div class="message-content">' . $_POST["txtmessage"] . '</div>
								</div>
							</div>
							<div class="wrap_but">
								<img  name="edit" onClick="showEditBox(this,' . $insert_id . ')" src="imagesite/edited.svg">
								<img  name="delete" onClick="callCrudAction("delete",' . $insert_id . ')" src="imagesite/-delete_90528.svg">
							</div>
						</div>';
				}
			}
			}else{
				echo "<script>alert('вы не авторизованны, если хотите писать сообщение авторизуйтесть или зарегестрируйтесь')</script>";
			}
			break;
			
		case "edit":
		    $query = "UPDATE `messages` SET `message` = '".$_POST["txtmessage"]."' WHERE  id=".$_POST["message_id"];
		    $result = $dbcont->execute($query);
			if($result){
				  echo $_POST["txtmessage"];
			}
			break;			
		
		case "delete": 
		    if(!empty($_POST["message_id"])) {
		        $query = "DELETE FROM `messages` WHERE `id`=".$_POST["message_id"];
		        $result = $dbcont->execute($query);
			}
			break;
	}
}
?>