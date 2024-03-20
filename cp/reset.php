<?
require_once '../include/config.php';
?>
<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../cp/login.php');
    }
?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Сбросить пароль</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.css">
	<script src="assets/js/formval.js"></script>    
	<script src="assets/js/vue.js"></script>    
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	</head> 

<body>

  
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>



<?php include "../include/leftmenu.php" ?>
         
<?php include "../include/social.php" ?>

<?php include "../include/menu.php" ?>
    
                         
            <!--header-->
            <div class="header">
            <div class="page-header">
                
            <img id="logo-header" src="../assets/img/logo-header.png"/>
                
                 <div class="page">
                
                    <div class="page-top"></div>
                    <div class="page-body">
                    
                        <div class="page-content">
                        <h1>Сбросить пароль</h1>
                        <img src="../assets/img/line-title.png"/>

   <?php
include('../include/config.php');
$con = mysqli_connect("$lichdbip","$lichdbuser","$lichdbpass","$lichdbauth");
	if (mysqli_connect_errno()){
		echo "Невозможно установить соединение с MySql: " . mysqli_connect_error();
		die();
		}

$error="";	

if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
  	$error .="<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <p>Неверный адрес электронной почты. Пожалуйста, введите действительный адрес электронной почты!</p>
        </div>
	";
	}else{
	$sel_query = "SELECT * FROM `account` WHERE email='".$email."'";
	$results = mysqli_query($con,$sel_query);
	$row = mysqli_num_rows($results);
	if ($row==""){
		$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <p>Ни один пользователь не зарегистрирован с этим адресом электронной почты!</p>
        </div>  
		"
		;
		}
	}
	if($error!=""){
	echo "<center>".$error."
	<br /><a class ='resethov' id='item2' href ='javascript:history.go(-1)'><p>Назад</p></a>";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$key = md5("2048*2 + $email");
	$addKey = substr(md5(uniqid(rand(),1)),3,10);
	$key = $key . $addKey;

mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");


$output='<p>Дорогой пользователь,</p>';
$output.='<p>Пожалуйста, перейдите по следующей ссылке, чтобы сбросить свой пароль.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://rewow.fun/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">https://rewow.fun/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Пожалуйста, обязательно скопируйте всю ссылку в свой браузер.
Срок действия ссылки истечет через 1 день по соображениям безопасности.</p>';
$output.='<p>Если вы не запрашивали это электронное письмо с забытым паролем, никаких действий
не требуется, ваш пароль не будет сброшен. Однако вы можете войти в
свою учетную запись и сменить пароль безопасности.</p>';   	
$output.='<p>Спасибо,</p>';
$output.='<p>с уважением администрация проекта ReWoW.FUN</p>';
$body = $output; 
$subject = "Восстановление пароля - ReWoW.FUN.";

$email_to = $email;
$fromserver = "support@rewow.fun"; 
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    require "PHPMailer/src/POP3.php";
    require "PHPMailer/src/Exception.php";
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.mail.ru"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "support@rewow.fun"; // Enter your email here
$mail->Password = "tYZsIIsyo31"; //Enter your passwrod here
$mail->Port = 587;
$mail->IsHTML(true);
$mail->From = "support@rewow.fun";
$mail->FromName = "Support ReWoW.FUN";
$mail->CharSet = "utf-8"; 
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body ;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='alertsucc alert-fill alert-fail alert-icon'>
            <em class='icon ni ni-check-circle'></em>
            <p>Мы отправили вам по электронной почте ссылку для сброса пароля!</p>
        </div><br /><a class ='resethov' id='item2' href ='javascript:history.go(-1)'><p>Назад</p></a>";
	}

		}	

}else{
?>
<form method="post" action="" name="reset">
		<div class="f-form mail">
			<input id="email" name="email"  required="" type="email" placeholder="Введите Email для сброса пароля">
		</div>
		<div class="f-form emailsub submit">
			<input type="submit" class="main-btn" value="Сбросить пароль">
		</div>
	</form>              
                    

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
<?php } ?>