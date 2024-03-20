<?
require_once '../include/config.php';
?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ../cp/login.php');
}

?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Сменить пароль</title>
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
<?php $passmenu = "active"; ?>
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
                <div class="title">Сменить пароль</div>
				<? include"../include/pass.php";?>
                <form method="POST" action="" class="inner-form" onSubmit="return validatePassword()">
                    <div class="lines">
                        <div class="icon flex-cc"><i class="fa fa-lock" aria-hidden="true"></i></div>
                        <div class="form-group field-changepasswordform-password_current required">

<input type="password" id="currentPassword" name="currentPassword" class="form-control-pass" placeholder="Текущий пароль" aria-required="true">

<div class="help-block"></div>
</div>                    </div>


                    <div class="lines">
                        <div class="icon flex-cc"><i class="fa fa-lock" aria-hidden="true"></i></div>
                        <div class="form-group field-changepasswordform-password required">

<input type="password" id="newPassword" name="newPassword" class="form-control-pass" placeholder="Новый пароль" aria-required="true" aria-autocomplete="list">

<div class="help-block"></div>
</div>                    </div>


                    <div class="lines">
                        <div class="icon flex-cc"><i class="fa fa-lock" aria-hidden="true"></i></div>
                        <div class="form-group field-changepasswordform-password_repeat required">

<input type="password" id="confirmPassword" name="confirmPassword" class="form-control-pass" placeholder="Повторите новый пароль" aria-required="true">

<div class="help-block"></div>
</div>                    </div>
                <button type="submit" name="submit" class="main-btn">Изменить</button>            
				</form>            
				<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
								<div class="messagesuc"><?php if(isset($messagesuc)) { echo $messagesuc; } ?></div>
				
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