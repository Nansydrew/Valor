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
	<script src="../assets/js/formval.js"></script>    
	<script src="../assets/js/vue.js"></script>    
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
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
require_once "../include/functions.php";
include('../include/config.php');
$con = mysqli_connect("$lichdbip","$lichdbuser","$lichdbpass","$lichdbauth");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
		
if (isset($_GET["key"]) && isset($_GET["email"])
&& isset($_GET["action"]) && ($_GET["action"]=="reset")
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
$curDate = date("Y-m-d H:i:s");
$query = mysqli_query($con,"
SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
$row = mysqli_num_rows($query);
if ($row==""){
$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <p>Ссылка недействительна или срок действия истек. Либо вы скопировали неправильную ссылку из электронного письма, либо вы уже использовали ключ, и в этом случае он деактивируется.</p>
        </div>
		<center><br /><a class ='resethov' id='item2' href ='javascript:history.go(-1)'><p>Назад</p></a></center>";
	}else{
	$row = mysqli_fetch_assoc($query);
	$expDate = $row['expDate'];
	if ($expDate >= $curDate){
	?>
                <form method="post" action="" name="update">

				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="email" value="<?php echo $email;?>"/>
		<div class="f-form pass">
			<input id="pass1" name="pass1" required="" type="password" maxlength="16" placeholder="Придумайте пароль">
			<div class="form-info">Длина до 16 символов, допускаются буквы английского алфавита, цифры и символы.</div>
			<div class="show-pass"></div>
		</div>
		<div class="f-form repass">
			<input id="pass2" name="pass2" required="" type="password" maxlength="16" placeholder="Повторите пароль">
			<div class="form-info">Проверьте и повторите Ваш пароль</div>
			<div class="show-pass"></div>
		</div>
		<div class="f-form emailsub submit">
			<input type="submit" id="reset" class="main-btn" value="Изменить пароль">
		</div>
	</form>              
                    
<?php
}else{
$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <p>Срок действия ссылки истек. Вы пытаетесь использовать ссылку с истекшим сроком действия, которая действительна только 24 часа (1 день после запроса).</p>
        </div>
		<center><br /><a class ='resethov' id='item2' href ='javascript:history.go(-1)'><p>Назад</p></a></center>";
				}
		}
if($error!=""){
	echo "<div class='error'>".$error."</div><br />";
	}			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);







$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
		$error .= "<div class='alert alert-fill alert-fail alert-icon' role='alert'>
            <p>Пароль не совпадает, оба пароля должны быть одинаковыми.</p>
        </div>
		<center><br /><a class ='resethov' id='item2' href ='javascript:history.go(-1)'><p>Назад</p></a></center>";
		}
	if($error!=""){
		echo "<div class='error'>".$error."</div><br />";
		}else{
?>
<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM account where email = '$email'";
if($result = mysqli_query($conn, $sql))
{
    $rowsCount = ($result);
            foreach($result as $row){
                $username = $row["username"];
                
            }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
<?
$username = strtoupper($row["username"]);
$password = sha1(strtoupper($username) . ':' . strtoupper($password));
mysqli_query($con,"UPDATE `account` SET `sha_pass_hash` = '$password', `session_key` = NULL WHERE `email`='".$email."';");	



mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");		
	
echo "<div class='alertsucc'>
            <p>Поздравляю! Ваш пароль был успешно обновлен.</p>
        </div>
		<center><br /><a class ='resethov' id='item2' href ='login.php'><p>Войти в личный кабинет</p></a></center>";
		}		
}
?>
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