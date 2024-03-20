<?php
require_once "functions.php";

$userid = $_SESSION["user"]["id"];
$username = strtoupper($_SESSION["user"]["username"]);
$password = $_POST['newPassword'];
$password2 = $_POST['confirmPassword'];


$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

if (count($_POST) > 0) {



    $result = mysqli_query($conn, "SELECT * from account WHERE id='$userid'");
	
	
	$currpass = md5($_POST["currentPassword"]);

    $row = mysqli_fetch_array($result);
    if ($currpass == $row["sha_pass_hash"])
	if ($password == $_POST["confirmPassword"])

	
		{
		$password = sha1(strtoupper($username) . ':' . strtoupper($password));
        mysqli_query($conn, "UPDATE account set `sha_pass_hash` = '$password', `session_key` = NULL WHERE id='$userid'");
        $messagesuc = "Пароль успешно изменён!";
    } else {
        $message = "Новые пароли несовпадают!";
	}
	
	else {
        $message = "Старый пароль введён неверно!";
	}
}
?>