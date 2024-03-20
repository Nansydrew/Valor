<?php
$userid = $_SESSION["user"]["id"];
$selectchar = $_POST["selectchar"];



$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

if (count($_POST) > 0) {



    $result = mysqli_query($conn, "SELECT * from characters WHERE guid='$selectchar'");
	
	$row = mysqli_fetch_array($result);
	$online = $row["online"];


    if ($online == 0)

	
		{
        mysqli_query($conn, "UPDATE characters SET position_x = '$pos_x', position_y = '$pos_y', position_z = '$pos_z', map = '$pos_map', orientation = '$pos_orientation', zone = '$pos_zone' WHERE guid = '$selectchar'");
        $messagesuc = "Персонаж был успешно перенесён в старт локацию!";
    } else {
        $message = "Выйдите из игры!";
	}
	
}
?>