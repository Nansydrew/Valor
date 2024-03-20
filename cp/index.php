<?
require_once '../include/config.php';
?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ../cp/login.php');
}

?>
<?php
session_start();
    $conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
		    if (!$conn) {
        die('Ошибка подключения к базе данных');
    }
	$userid=  $_SESSION["user"]["id"];
mysqli_query($conn, "INSERT INTO `account_banned` (`id`, `bannedby`, `banreason`, `active`) VALUES ('$userid', '0', '0', '0')");
?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Личный кабинет</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/panel.css">
	<link rel="stylesheet" href="../assets/css/panel_mobile.css">
	<script src="../assets/js/formval.js"></script>    
	<script src="../assets/js/vue.js"></script>    
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head> 

<body>

  
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>


<?php $cp = "-active"; ?>
<?php include "../include/leftmenu.php" ?>
         
<?php include "../include/social.php" ?>

<?php include "../include/menu.php" ?>
    
                         
            <!--header-->
    <div class="header">         
            <div class="page-header">
                
            <img id="logo-header" src="../assets/img/logo-header.png"/>
                
                 <div class="page">
                
 
                        
<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

	
$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $bonuses = $row["bonus"];
                $votes = $row["vote"];
				$emailv = $row["email"];
				$last_login = $row["last_login"];
				$last_ip = $row["last_ip"];
				$joindate = $row["joindate"];
                
            }
        }
        mysqli_free_result($result);
    } 

	
	
	else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>                
<div class="content-bg">
    <div class="content inner-content flex-ss">
        <div class="cp-nav">
<?php $infomenu = "active"; ?>
<?php include "../include/menucp.php" ?>
			
			<br>	
			

			
			<br>	
					
        </div>
        <div class="cp-content">
            <div class="cp-title flex-cc">Панель пользователя</div>
            <div class="cp-banners flex-sbc">
                <a class="banner flex-cc" href="shop.php"><img class="bg" src="../assets/img/banner_1_bg.png"><span class="text">МАГАЗИН</span></a>
                <a class="banner flex-cc" href="vote.php"><img class="bg" src="../assets/img/banner_2_bg.png"><span class="text">ГОЛОСОВАНИЕ</span></a>
				<a class="banner flex-cc" href="donate.php"><img class="bg" src="../assets/img/banner_3_bg.png"><span class="text">ПОПОЛНИТЬ</span></a>            </div>
            <div class="cp-form-block">

<table _ngcontent-cpw-c6="" cellpadding="0" cellspacing="0" class="inner-table main-table" width="100%">
<tr _ngcontent-cpw-c6=""><td _ngcontent-cpw-c6="">Почтовый адрес</td><td _ngcontent-cpw-c6=""><div _ngcontent-cpw-c6="" class="td-bg flex-cc"><img _ngcontent-cpw-c6="" alt="" src="../assets/img/icons/icon_email.gif"></div></td><td _ngcontent-cpw-c6=""><?
function asterisks($toConvert) {
    $astNumber = strlen($toConvert) - 10;
    return substr($toConvert, 0, 1) . str_repeat("*", $astNumber) . substr($toConvert, -9);
}

$tempString= $emailv;
echo asterisks($tempString);
?>
</td></tr>


<!----><tr _ngcontent-cpw-c6=""><td _ngcontent-cpw-c6="">Последний вход</td><td _ngcontent-cpw-c6=""><div _ngcontent-cpw-c6="" class="td-bg flex-cc"><img _ngcontent-cpw-c6="" alt="" src="../assets/img/icons/icon_last_login.gif"></div></td><td _ngcontent-cpw-c6=""><font _ngcontent-cpw-c6="" color="#f89408"><? echo $last_login ?></font></td></tr>


<tr _ngcontent-cpw-c6=""><td _ngcontent-cpw-c6="">Последний IP</td><td _ngcontent-cpw-c6=""><div _ngcontent-cpw-c6="" class="td-bg flex-cc"><img _ngcontent-cpw-c6="" alt="" src="../assets/img/icons/icon_last_ip.gif"></div></td><td _ngcontent-cpw-c6=""><font _ngcontent-cpw-c6="" color="#f89408"><? echo $last_ip ?></font></td></tr>


<tr _ngcontent-cpw-c6=""><td _ngcontent-cpw-c6="">Дата регистрации</td><td _ngcontent-cpw-c6=""><div _ngcontent-cpw-c6="" class="td-bg flex-cc"><img _ngcontent-cpw-c6="" alt="" src="../assets/img/icons/icon_acc_mode_0.png"></div></td><td _ngcontent-cpw-c6=""> <? echo $joindate ?></td></tr>


<tr _ngcontent-cpw-c6=""><td _ngcontent-cpw-c6="">Забанен</td><td _ngcontent-cpw-c6=""><div _ngcontent-cpw-c6="" class="td-bg flex-cc"><img _ngcontent-cpw-c6="" alt="" src="../assets/img/icons/icon_banned.gif"></div></td><td _ngcontent-cpw-c6=""><!----><!----><span _ngcontent-cpw-c6="">
<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
mysqli_set_charset($connlich, "utf8");  
$userid=  $_SESSION["user"]["id"];
$sql =  "SELECT * FROM account_banned WHERE id = '$userid'";

	
if($result = mysqli_query($connlich, $sql))

{
	

	
    $rowsCount = ($result);

    foreach($result as $row)

	{
		

if ($row['active']) {
  $active = '<font color = red>Да</font>';
} else {
  $active = 'Нет';
}

		
		
echo "$active";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?></span></td></tr>




<tr _ngcontent-cpw-c6=""><td _ngcontent-cpw-c6="">В игре</td><td _ngcontent-cpw-c6=""><div _ngcontent-cpw-c6="" class="td-bg flex-cc"><img _ngcontent-cpw-c6="" alt="" src="../assets/img/icons/icon_online.gif"></div></td><td _ngcontent-cpw-c6=""> <?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
mysqli_set_charset($connlich, "utf8");  
$userid=  $_SESSION["user"]["id"];
$sql =  "SELECT * FROM account WHERE id = '$userid'";

	
if($result = mysqli_query($connlich, $sql))

{
	

	
    $rowsCount = ($result);

    foreach($result as $row)

	{
		

if ($row['online']) {
  $online = '<font color = green>Да</font>';
} else {
  $online = 'Нет';
}
		
		
echo "$online";

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?></td></tr>

</table>
	
	
	
	</div>
        </div>
    </div>
</div>
</div>

            
                    
                </div>   
            
            <!--end header-->
            
<?php include "../include/footer.php" ?>

        <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
 
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
    </script> 

    <script>

    var video = document.getElementById("header-video");

    </script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/sidenav.js"></script>    
	<script src="../assets/js/main.js"></script>
	
</body>

</html>