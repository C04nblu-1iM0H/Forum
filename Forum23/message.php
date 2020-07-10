<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'registr') or die("Database Error");
mysqli_set_charset($db,"utf8");
        $messagequery=mysqli_query($db, "SELECT id, userid, message FROM messages ORDER BY id DESC ");
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