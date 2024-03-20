<?php
require_once "functions.php";

$userid = $_SESSION["user"]["id"];

$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
	
$connchar = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
    if (!$connchar) {
      die("Ошибка: " . mysqli_connect_error());
    }

$sql = "SELECT * FROM account WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $bonus = $row["bonus"];
                
            }
        }
        mysqli_free_result($result);
    }


if (count($_POST) > 0) {

	$selectchar = $_POST["selectchar"];
	$price = $_POST["price"];
    $result = mysqli_query($conn, "SELECT bonus from account WHERE id='$userid'");
	
	$enchantments = "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 ";
	$afterOperation = $bonus - $price * $colbonus;
	
	$subject = "Ваш заказ из персонального кабинета.";
	$body = "Спасибо за покупку. Приятной игры на нашем сервере!";
	$expire_time = time() + 2592000;
	$razreshenniye_simvoli = '0123456789';
    $ebat = substr(str_shuffle($razreshenniye_simvoli * 2 + 20 -16), 0, 5);
	$deliver_time = time() - 36000;
	$timeoe = time();
	$timedonate = (date("Y.m.d H:i:s", $timeoe));
    $row = mysqli_fetch_array($result);
    if ($afterOperation >= 0)

	
		{
			
        mysqli_query($conn, "UPDATE account SET bonus = '$afterOperation' WHERE id = '$userid'");
		mysqli_query($conn, "INSERT INTO donate_logs SET id = NULL, pers = '$selectchar', bonusov = '$price', date = '$timedonate', type = 'Донат'");
		mysqli_query($connchar, "INSERT INTO item_instance SET guid = $ebat, itemEntry = '$monetacp', owner_guid = '$selectchar', count = '$price', enchantments = '$enchantments'");
		mysqli_query($connchar, "INSERT INTO mail SET id = '$ebat', stationery = '61', receiver = '$selectchar', subject = '$subject', body = '$subject', has_items = '1', expire_time = '$expire_time ', deliver_time = '$deliver_time', money = '0'");
		mysqli_query($connchar, "INSERT INTO mail_items SET mail_id = '$ebat', item_guid = '$ebat', receiver = '$selectchar'");
													
													
        $messagesuc = "Монеты были успешно отправлены!";
    } else {
        $message = "Недостаточно бонусов!";
	}

}
?>