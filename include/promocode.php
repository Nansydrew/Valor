<?php
$userid = $_SESSION["user"]["id"];
$username = $_SESSION["user"]["username"];
$promocode = $_POST["promocode"];



$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
	
$sql = "SELECT * FROM account WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $bonusyou = $row["bonus"];
                
            }
        }
        mysqli_free_result($result);
    }

if (count($_POST) > 0) {



    $result = mysqli_query($conn, "SELECT * from promocode where code = '$promocode' and status = '0'");
	
	$row = mysqli_fetch_array($result);
	$promocodel = $row["code"];
	$bonus = $row["bonus"];

	$bonusall = $bonusyou + $bonus;
    if ($promocode === $promocodel)

	
		{
        mysqli_query($conn, "UPDATE promocode set status = '1', user = '$username' where code = '$promocode'");
		mysqli_query($conn, "UPDATE account SET bonus = '$bonusall' WHERE id = '$userid'");
		
        $messagesuc = "Промокод был успешно активирован!";
    } else {
        $message = "Промокода не существует или уже был активирован.";
	}
	
}
?>